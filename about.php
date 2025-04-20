

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #2e2e2e, #000000, #ff0000);
            color: #ffffff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #000000;
            padding: 3px 0;
            z-index: 1000;
        }

        header nav {
            width: 90%;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header nav .logo img {
            width: 80px;
        }

        header nav .menu a {
            color: #fff;
            margin-left: 20px;
            position: relative;
        }

        nav .menu a::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0%;
            height: 2px;
            background-color: #dd0707;
            transition: 0.4s;
        }

        nav .menu a:hover::after {
            width: 100%;
        }

        .container {
            max-width: 1200px;
            margin: 60px auto 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
        }

        .about {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
        }

        .about p {
            line-height: 1.6;
        }

        .quote {
            text-align: center;
            font-style: italic;
            font-size: 18px;
            margin-top: 20px;
        }

        img {
            display: block;
            max-width: 60%;
            height: auto;
            margin: 10px auto;
            border-radius: 8px;
        }

        footer {
            background-color: #000000;
            padding: 1rem;
            color: #ffffff;
            text-align: center;
            margin-top: auto;
        }
    </style>
</head>
<body>

<header>
    <nav>
        <div class="logo">
            <img src="c-logo.png" alt="Logo">
        </div>
        <div class="menu">
            <a href="home.php">Home</a>
            <a href="service.php">Services</a>
            <a href="contactus.php">Contact Us</a>
        </div>
    </nav>
</header>

<div class="container">
    <br><br>
    <h1>About Us</h1>
    
    <div class="about">
        <img src="crent.jpg" alt="Car Rental Image">
        <p>Founded in 2024, our car rental service aims to revolutionize the way people rent vehicles in Pakistan. Our mission is to provide a seamless online experience, allowing customers to easily book cars that meet their needs.</p>
        <p>Our platform is designed to assist users in selecting from a diverse range of vehicles while ensuring the highest quality of service. We believe in building a community around car rental that fosters trust and convenience.</p>
        <p>With a user-friendly interface and dedicated customer support, we aim to cater to everyone’s automotive needs, whether it's for leisure or business purposes. Our extensive range of vehicles is just a click away!</p>
    </div>

    <div class="quote">
        <p>“THINK renting, THINK CaRS!”</p>
    </div>
</div>

<!-- Footer Section -->
<footer>
    <p>&copy; 2024 CaRS.com | All rights reserved.</p>
</footer>

</body>
</html>
