<?php
$host = '127.0.0.1';
$db = 'car';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$successMessage = ""; // Initialize success message variable
$errorMessage = "";   // Initialize error message variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password']; // Store the plain password (no hashing)
    $confirm_password = $_POST['confirm_password'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];

    // Input validation
    if (empty($full_name) || empty($username) || empty($email) || empty($phone) || empty($password) || empty($confirm_password) || empty($city) || empty($gender) || empty($age)) {
        $errorMessage = "All fields are required.";
    } elseif ($password !== $confirm_password) {
        // Check if password and confirm password match
        $errorMessage = "Password and confirm password do not match.";
    } else {
        // Check if the email already exists in the database
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $errorMessage = "Email is already registered. Please use a different email.";
        } else {
            // Hash the password before storing it in the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Prepare and bind SQL query to insert new user
            $stmt = $conn->prepare("INSERT INTO users (full_name, username, email, phone, password, city, gender, age) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssi", $full_name, $username, $email, $phone, $hashed_password, $city, $gender, $age);

            if ($stmt->execute()) {
                // Redirect to signin.php after successful registration
                header("Location: signin.php");
                exit();
            } else {
                $errorMessage = "Registration failed. Please try again.";
            }
            $stmt->close();
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Registration</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #2e2e2e, #000000, #ff0000); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .signup-container {
            background-color: rgba(26, 26, 26, 0.8); 
            padding: 15px;
            border-radius: 8px;
            width: 100%;
            max-width: 320px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            box-sizing: border-box;
        }

        .home-link {
            text-align: center;
            margin-bottom: 15px; 
            margin-top: 10px; 
        }

        .home-link a {
            color: #ffffff; 
            text-decoration: none; 
            font-size: 16px; 
            font-weight: bold; 
            padding: 8px 15px; 
            border: 2px solid transparent;
            border-radius: 5px; 
            transition: background-color 0.4s, padding 0.4s; 
            display: inline-block; 
        }

        .home-link a:hover {
            background-color: #cc0000; 
            padding: 10px 20px; 
            border-radius: 10px; 
        }

        h2 {
            text-align: center;
            font-size: 24px; 
            margin-bottom: 10px; 
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            color: #fff;
            margin-top: 5px;
            font-size: 13px; 
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="number"],
        select {
            width: 100%;
            padding: 6px;
            margin-top: 3px;
            background-color: #333;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 13px;
            box-sizing: border-box;
        }

        .gender-section {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            color: #fff;
            font-size: 12px;
        }

        .button {
            padding: 8px;
            background-color: #ff0000;
            color: #ffffff;
            text-align: center;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            font-size: 13px;
            transition: background-color 0.4s;
        }

        .button:hover {
            background-color: #cc0000;
        }

        @media (max-width: 768px) {
            .signup-container {
                width: 90%;
            }

            .gender-section {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        table {
            width: 100%;
            color: #fff;
        }

        td {
            padding: 4px;
        }

        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>
<body>

<div class="signup-container">
    <div class="home-link">
        <a href="home.php">HOME</a>
    </div>
    <h2>Car Rental Registration</h2>

    <!-- Form to submit booking details -->
    <form id="signup-form" action="signup.php" method="POST">
        <table cellspacing="4">
            <tr>
                <td><label for="full_name">Full Name:</label></td>
                <td><input type="text" name="full_name" id="full_name" placeholder="Enter your full name" required></td>
            </tr>
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type="text" name="username" id="username" placeholder="Username" required></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" name="email" id="email" placeholder="Email" required></td>
            </tr>
            <tr>
                <td><label for="phone">Phone Number:</label></td>
                <td><input type="tel" name="phone" id="phone" placeholder="Phone Number" required></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password" placeholder="Password" minlength="8" required></td>
            </tr>
            <tr>
                <td><label for="confirm_password">Confirm Password:</label></td>
                <td><input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required></td>
            </tr>
            <tr>
                <td><label for="city">City:</label></td>
                <td>
                    <select name="city" id="city">
                        <option>Islamabad</option>
                        <option>Rawalpindi</option>
                        <option>Lahore</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <label><input type="radio" name="gender" value="male" required> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                    <label><input type="radio" name="gender" value="other"> Prefer not to say</label>
                </td>
            </tr>
            <tr>
                <td><label for="age">Age:</label></td>
                <td><input type="number" name="age" id="age" placeholder="Age" required></td>
            </tr>
        </table>
        <input type="submit" class="button" value="Register Now">
    </form>

    <div class="error-message">
        <?php if (isset($errorMessage)) echo $errorMessage; ?>
    </div>
</div>

</body>
</html>
