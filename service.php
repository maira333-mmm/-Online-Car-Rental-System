<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>
</head>
<body>

<!-- Content of the page here -->

</body>
</html>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Car Rental Portal | Car Listing</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Existing styles for layout and design */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        /* Header Styles */
        header {
            position: static;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 0;
            margin-bottom: 10px;
        }

        header nav {
            width: 90%;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            width: 120px;
        }

        .menu a {
            color: #fff;
            margin-left: 20px;
            position: relative;
        
    text-decoration: none;
        }
     /* Page Header Text Styling */
.page-header h1 {
    font-family: 'Poppins', sans-serif; /* You can choose any font you prefer */
    font-size: 3rem; /* Adjust the size as needed */
    font-weight: bold; /* Make it bold */
    color: white;
    letter-spacing: 2px; /* Optional: Adds spacing between letters */
}

.page-header p {
    font-family: 'Arial', sans-serif; /* Or another font of your choice */
    font-size: 1.25rem; /* Slightly smaller than the h1 */
    color: white;
    line-height: 1.5; /* Improves readability */
    font-weight: 300; /* Lighter font weight */
    letter-spacing: 1px; /* Optional: Adds spacing between letters */
}


        .menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #dd0707;
            transition: 0.4s;
        }

        .menu a:hover::after {
            width: 100%;
        }

        .card {
            background-color: transparent;
            border: 1px solid #ddd;
        }

        .card-body ul li i {
            color: white;
        }

        .card-body .card-title, 
        .card-body .list-price {
            color: white;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            background: url('dd.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }

        .page-header {
            background:  #dd0707;
            color: white;
            padding: 40px 0;
            text-align: center;
        }

        .list-price {
            font-weight: bold;
            font-size: 1.25rem;
            color: white;
        }

        .card-body ul {
            padding-left: 0;
            list-style: none;
        }

        .card-body ul li {
            display: inline-block;
            margin-right: 15px;
            color: white;
        }

        .card-body .card-title {
            color: white;
        }

        .card-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
            border-radius: 5px;
        }

        .sidebar_widget h5 {
            font-weight: bold;
            margin-bottom: 15px;
        }

        .sidebar_widget {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .sidebar_widget .btn {
            margin-top: 10px;
        }

        .btn-primary {
            background-color:#c20606;
            border-color:#c20606;
        }

        .btn-primary:hover {
            background-color: #c20606;
            border-color: #c20606;
        }

        .btn-primary:focus,
        .btn-primary:active {
            outline: none;
            box-shadow: none;
            background-color: #c20606;
            border-color: #c20606;
        }

        footer {
            background: #333;
            color: #ccc;
            padding: 20px;
            text-align: center;
        }

        /* Hide car listings by default (they will be shown on page load) */
        .car {
            display: block;
        }

  /* Header Styles */
header nav {
    width: 90%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header .logo {
    width: 120px;
}

.menu {
    display: flex;
    align-items: center;
}

.menu a {
    color: #fff;
    margin-left: 20px;
    position: relative;
    text-decoration: none;
}

.menu a::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0;
    height: 2px;
    background-color: #dd0707;
    transition: 0.4s;
}

.menu a:hover::after {
    width: 100%;
}

.menu a:first-child {
    margin-left: 0; /* Remove margin from the first link */
}


    </style>
</head>
<body>
 <!-- Header Section with Navigation -->
 <header>
 
    <nav>
    <nav>
        <img src="c-logo.png" class="logo" alt="Car Rental Logo">
        <div class="menu">
            <a href="home.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="service.php">Services</a>
            <a href="contactus.php">Contact Us</a>
         
            <?php if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true): ?>
                <!-- Show Logout if user is logged in -->
                <a href="logout.php">Signout</a>
            <?php else: ?>
                <!-- Show Login if user is not logged in -->
                <a href="signin.php">Signin</a>
            <?php endif; ?>
        </div>
    </nav>
</header>

<!-- Page Header -->
<section class="page-header">
    <h1>Welcome to Our Car Rental Services</h1>
    <p>Find the best car rental deals suited to your needs</p>
</section>

<!-- Listing Section -->
<section class="listing-page py-5">
    <div class="container"><!-- Bootstrap container for responsive design -->
        <div class="row"><!-- Bootstrap row for grid layout -->
            <!-- Car Listings -->
            <div class="col-md-9"><!-- Bootstrap column for main content area -->
                <div class="sorting-count mb-3">
                    <p><span>4 Listings</span></p>
                </div>

                <!-- Car Listing Item - Toyota 86 British Green Limited (Luxury) -->
                <div class="card mb-4 car luxury"><!-- Bootstrap card component for listing design -->
                    <div class="row no-gutters"><!-- Bootstrap row for no-padding alignment -->
                        <div class="col-md-4"><!-- Bootstrap column for image section -->
                            <img src="toyot.jpg" class="card-img" alt="Car Image"> <!-- Bootstrap card image style -->
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Toyota 86 British Green Limited</h5>
                                <p class="card-text list-price">$200 Per Day</p>
                                <ul>
                                    <li><i class="fa fa-user" aria-hidden="true"></i> 2 seats</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> 2019 model</li>
                                    <li><i class="fa fa-car" aria-hidden="true"></i> Petrol</li>
                                </ul>
                                <a href="t.php?car_id=1" class="btn btn-primary">View Details</a>

                              
                                
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car Listing Item - Kia Rio 2018 (Economy) -->
                <div class="card mb-4 car economy">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="econo.jpg" class="card-img" alt="Car Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Kia Rio </h5>
                                <p class="card-text list-price">$90 Per Day</p>
                                <ul>
                                    <li><i class="fa fa-user" aria-hidden="true"></i> 5 seats</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> 2018 model</li>
                                    <li><i class="fa fa-car" aria-hidden="true"></i> Petrol</li>
                                </ul>
                                <a href="t.php?car_id=2" class="btn btn-primary">View Details</a>

                        
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car Listing Item - Hyundai Palisade 2021 (SUV) -->
                <div class="card mb-4 car suv">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="ssss.jpg" class="card-img" alt="Car Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Hyundai Palisade 2021</h5>
                                <p class="card-text list-price">$150 Per Day</p>
                                <ul>
                                    <li><i class="fa fa-user" aria-hidden="true"></i> 7 seats</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> 2021 model</li>
                                    <li><i class="fa fa-car" aria-hidden="true"></i> Petrol</li>
                                </ul>
                          
                                <a href="t.php?car_id=3" class="btn btn-primary">View Details</a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car Listing Item - Mercedes-Benz Sprinter 2012 (Van) -->
                <div class="card mb-4 car van">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="v.jpg" class="card-img" alt="Car Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Mercedes-Benz Sprinter 2012</h5>
                                <p class="card-text list-price">$100 Per Day</p>
                                <ul>
                                    <li><i class="fa fa-user" aria-hidden="true"></i> 12 seats</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> 2012 model</li>
                                    <li><i class="fa fa-car" aria-hidden="true"></i> Diesel</li>
                                </ul>
                                <a href="t.php?car_id=4" class="btn btn-primary">View Details</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Widget with Car Type Filter -->
            <div class="col-md-3"><!-- Bootstrap column for sidebar filter -->
                <div class="sidebar_widget">
                    <h5>Filter By Car Type</h5>
                    <select id="car-type-filter" class="form-control"> <!-- Bootstrap form-control for dropdown styling -->
                        <option value="all">All Types</option>
                        <option value="luxury">Luxury</option>
                        <option value="economy">Economy</option>
                        <option value="suv">SUV</option>
                        <option value="van">Van</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer style="background-color: rgba(64, 64, 64, 0.7); padding: 1rem;">
    <p class="text-light text-center mb-0">&copy; 2024 CaRS.com | All rights reserved.</p>
</footer>



<!-- JavaScript (for filtering functionality) -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var cars = document.querySelectorAll('.car');
        cars.forEach(function(car) {
            car.style.display = 'block'; // Show all cars by default
        });
    });

    document.getElementById('car-type-filter').addEventListener('change', function() {
        var selectedType = this.value;
        var cars = document.querySelectorAll('.car');
        
        cars.forEach(function(car) {
            if (selectedType === 'all' || car.classList.contains(selectedType)) {
                car.style.display = 'block'; // Show the selected car type
            } else {
                car.style.display = 'none'; // Hide non-matching car types
            }
        });
    });
</script>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.10/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
