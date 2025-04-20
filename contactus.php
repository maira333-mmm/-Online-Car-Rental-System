<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
            padding: 8px 0; /* Reduced padding */
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5); /* Added shadow for better visibility */
        }

        header nav {
            width: 90%;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header nav .logo img {
            width: 100px; /* Reduced logo size */
        }

        header nav .menu a {
            color: #fff;
            margin-left: 30px;
            font-size: 16px;
            position: relative;
        }

        nav .menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0%;
            height: 2px;
            background-color: #dd0707;
            transition: 0.4s;
        }

        nav .menu a:hover::after {
            width: 100%;
        }

        .contact-section {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-grow: 1;
            padding-top: 100px; /* Increased padding to prevent overlap with header */
            background-color: rgba(0, 0, 0, 0.8);
            padding-bottom: 80px;
        }

        .contact-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 1100px;
            margin: auto;
        }

        .contact-form, .contact-info {
            width: 45%;
            background-color: rgba(26, 26, 26, 0.8);
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
        }

        .contact-form h2, .contact-info h2 {
            font-size: 24px;
            color: #dd0707;
            margin-bottom: 20px;
        }

        .contact-form input, .contact-form select, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffffff;
        }

        .contact-form select {
            background-color: rgba(51, 51, 51, 0.8);
            color: white;
        }

        .contact-form textarea {
            resize: none;
            height: 100px;
        }

        .captcha {
            display: flex;
            align-items: center;
        }

        .captcha label {
            margin-left: 10px;
            color: #ffffff;
        }

        .send-btn {
            width: 100%;
            padding: 10px;
            background-color: #dd0707;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .send-btn:hover {
            background-color: #bb0505;
        }

        .contact-info p {
            margin-bottom: 15px;
            font-size: 16px;
            color: #fff;
        }

        footer {
            background-color: #000000;
            color: #ffffff;
            text-align: center;
            padding: 20px 0;
            position: relative;
            width: 100%;
        }

        footer p {
            font-size: 16px;
            margin: 0;
        }

        @media (max-width: 768px) {
            .contact-container {
                flex-direction: column;
                align-items: center;
            }

            .contact-form, .contact-info {
                width: 90%;
                margin-bottom: 20px;
            }

            header nav .menu a {
                font-size: 14px; /* Adjust font size for smaller screens */
                margin-left: 20px; /* Adjust margin */
            }
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
                <a href="about.php">About Us</a>
                <a href="service.php">Services</a>
            </div>
        </nav>
    </header>

    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-form">
                <h2>Your Details</h2>
                <form action="#" method="POST">
                    <input type="text" placeholder="Full Name" required>
                    <input type="email" placeholder="name@email.com" required>
                    <input type="tel" placeholder="03xxxxxxxxxx" required>
                    <select required>
                        <option value="">Message Subject</option>
                        <option value="inquiry">Inquiry</option>
                        <option value="support">Support</option>
                        <option value="feedback">Feedback</option>
                    </select>
                    <textarea placeholder="Enter Your Message Here" maxlength="250" required></textarea>
                    <button type="submit" class="send-btn">Send</button>
                </form>
            </div>
            <div class="contact-info">
                <h2>Contact Information</h2>
                <p><strong>Address:</strong> Alam Tower, 37-Commercial Zone, Liberty Market, Islamabad, Pakistan.</p>
                <p><strong>Phone:</strong> 042 - 111 CaRs (042 - 383 333 383)</p>
                <p><strong>Email:</strong> customersupport@alamventures.com</p>
                <h3>Operating Hours</h3>
                <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                <p>Saturday: 10:00 AM - 4:00 PM</p>
                <p>Sunday: Closed</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 CaRS.com | All rights reserved.</p>
    </footer>

</body>
</html>
