<?php
session_start();
$host = '127.0.0.1';
$db = 'car';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password']; // Plain password

    if (empty($email) || empty($password)) {
        $error_message = "Please enter both email and password.";
    } else {
        // Fetch user data based on email
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify the password using password_verify
            if (password_verify($password, $user['password'])) {
                // Login successful, set session variable
                $_SESSION['user_logged_in'] = true;
                $_SESSION['user_email'] = $email;
                header("Location: service.php"); // Redirect to service page
                exit;
            } else {
                // Incorrect password
                $error_message = "Invalid password.";
            }
        } else {
            // Email not found
            $error_message = "Invalid user. Please <a href='signup.php'>register</a>.";
        }
        $stmt->close();
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Login</title>
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

        .login-container {
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

        input[type="email"],
        input[type="password"] {
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

        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="home-link">
        <a href="home.php">HOME</a>
    </div>
    <h2>Car Rental Login</h2>

    <form action="signin.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>

        <input type="submit" class="button" value="Login">
    </form>

    <div class="error-message">
        <?php if (isset($error_message)) echo $error_message; ?>
    </div>
</div>

</body>
</html>

