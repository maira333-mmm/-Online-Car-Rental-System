<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Car Rental System</title>

    <!-- Link Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="c.css">
</head>
<body>
    <!-- Background Image Section -->
    <div id="background" class="background bg-light"></div>

    <!-- Header Section -->
    <header>
        <nav>
            <img src="c-logo.png" class="logo" alt="Car Rental Logo">
            <div class="menu">
                <a href="home.php">Home</a>
                <a href="service.php">Services</a>
                <a href="about.php">About Us</a>
                <a href="contactus.php">Contact Us</a>
                <a href="signin.php">Sign In</a>
                <a href="signup.php" class="sign-up">Sign Up</a>
            </div>
            <div class="social">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </nav>
    </header>
   
    <br>
    <br>
    <br>
    <!-- Hero Section -->
    <div class="hero">
        <div class="text">
            <h4>Discover Comfort and Performance with</h4>
            <h1>Our Exclusive <br> <span class="red">Rental Cars</span></h1>
            <p>Unmatched driving experience, wherever the road takes you.</p>
        </div>
    </div>

    <!-- Booking Form Section -->
    <div class="booking-form-container">
        <form id="booking-form" action="service.html" method="post">
            <div class="form-field">
                <label for="location">Location</label>
                <select name="location" id="location" required>
                    <option value="" disabled selected>Search Places</option>
                    <option>Islamabad</option>
                    <option>Rawalpindi</option>
                    <option>Lahore</option>
                </select>
            </div>
            <div class="form-field">
                <label for="pickup-date">Pick-Up Date</label>
                <input type="date" id="pickup-date" name="pickup-date" required>
            </div>
            <div class="form-field">
                <label for="return-date">Return Date</label>
                <input type="date" id="return-date" name="return-date" required>
            </div>
            <div class="form-field submit-container">
                <!-- Button to trigger JavaScript function -->
                <button type="button" onclick="submitForm()" class="submit-btn">Submit</button>
            </div>
        </form>
    </div>

    <script>
        // JavaScript function to handle form submission
        function submitForm() {
            var form = document.getElementById('booking-form');
            
            // Check if all fields are valid before submitting
            if (form.checkValidity()) {
                window.location.href = "service.php";  // Redirect to service.html page
            } else {
                alert('Please fill out all fields correctly.');
            }
        }
    </script>

    <!-- Popular Choices Section -->
    <div class="popular-choices-section">
        <h2>Popular Rental Car Choices</h2>
        <div class="image-container">
            <ul>
                <li>
                    <div class="image-wrapper">
                        <img src="
                        
                        suv.png" alt="SUV Rental">
                        <p class="car-name">SUV Rentals</p>
                    </div>
                </li>
                <li>
                    <div class="image-wrapper">
                        <img src="luxury.png" alt="Luxury Car Rentals">
                        <p class="car-name">Convertible / Luxury Car Rentals</p>
                    </div>
                </li>
                <li>
                    <div class="image-wrapper">
                        <img src="econo.png" alt="Economy Car Rentals">
                        <p class="car-name">Economy Car Rentals</p>
                    </div>
                </li>
                <li>
                    <div class="image-wrapper">
                        <img src="van.png" alt="Passenger Van Rentals">
                        <p class="car-name">Passenger Van Rentals</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Benefits Section -->
    <section class="benefits-faq-section">
        <div class="benefits-section">
            <div class="benefit-item">
                <img src="flexilocgo.png" alt="Flexible Rentals">
                <h3>Flexible Rentals</h3>
                <p>Cancel or change most bookings for free up to 48 hours before pick-up.</p>
            </div>
            <div class="benefit-item">
                <img src="Search.png" alt="No Hidden Fees">
                <h3>No Hidden Fees</h3>
                <p>Know exactly what you’re paying.</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h3>About Us</h3>
                <p>CaRs offers reliable and affordable car rental services in Islamabad and beyond. Choose from a wide range of cars to suit your travel needs.</p>
            </div>
            <div class="footer-section hours">
                <h3>Operating Hours</h3>
                <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                <p>Saturday: 10:00 AM - 4:00 PM</p>
                <p>Sunday: Closed</p>
            </div>
            <div class="footer-section contact">
                <h3>Contact Us</h3>
                <p>Alam Tower, 37-Commercial Zone, Liberty Market, Islamabad</p>
                <p>Phone: 042 - 111 CaRs (042 - 383 383 383)</p>
                <p>Email: <a href="mailto:customersupport@alamventures.com">customersupport@alamventures.com</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 CaRs.com. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Background Image Toggle Script -->
    <script>
        // Function to toggle between two background images
        function toggleBackground() {
            var backgroundDiv = document.getElementById('background');
            if (backgroundDiv.classList.contains('bg-light')) {
                backgroundDiv.classList.remove('bg-light');
                backgroundDiv.classList.add('bg-dark');
            } else {
                backgroundDiv.classList.remove('bg-dark');
                backgroundDiv.classList.add('bg-light');
            }
        }

        // Change background every 2 seconds
        setInterval(toggleBackground, 2000);  // 2000 ms = 2 seconds
    </script>
</body>
</html>
