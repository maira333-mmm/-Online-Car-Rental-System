<div align="center">

<img width="100%" src="https://capsule-render.vercel.app/api?type=waving&height=210&color=0:1E3A5F,50:2563EB,100:60A5FA&text=Online%20Car%20Rental&fontColor=ffffff&fontSize=50&fontAlignY=38&desc=Book%20Cars%20%7C%20Browse%20%7C%20Drive&descAlignY=60&animation=fadeIn" alt="Online Car Rental Header" />

<br>

<img src="https://readme-typing-svg.demolab.com?font=Inter&weight=600&size=20&duration=2800&pause=700&color=2563EB&center=true&vCenter=true&repeat=true&width=700&height=52;Fully+Functional+Car+Rental+System.;Browse%2C+Book%2C+and+Filter+Cars+Easily.;Responsive+UI+%7C+PHP+Backend+%7C+MySQL+Database.;Secure+Authentication+%26+User+Management." alt="Typing Animation" />

<br><br>

A fully functional **Online Car Rental System** with car browsing, booking, and category filtering. Implemented a responsive UI with interactive forms using **HTML, CSS, JavaScript, and Bootstrap**. Integrated **PHP** for backend and **MySQL** for database handling.

<br>

<a href="https://github.com/maira333-mmm/-Online-Car-Rental-System">
  <img src="https://img.shields.io/badge/📂_SOURCE_CODE-181717?style=for-the-badge&logo=github&logoColor=white" alt="Source Code"/>
</a>

<a href="https://github.com/maira333-mmm/-Online-Car-Rental-System/commits/main">
  <img src="https://img.shields.io/github/last-commit/maira333-mmm/-Online-Car-Rental-System?style=for-the-badge&label=LAST%20UPDATE" alt="Last Update"/>
</a>

<br><br>

<img src="https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white"/>
<img src="https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white"/>
<img src="https://img.shields.io/badge/HTML5-E34F26?style=flat-square&logo=html5&logoColor=white"/>
<img src="https://img.shields.io/badge/CSS3-1572B6?style=flat-square&logo=css3&logoColor=white"/>
<img src="https://img.shields.io/badge/Bootstrap-7952B3?style=flat-square&logo=bootstrap&logoColor=white"/>
<img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=flat-square&logo=javascript&logoColor=black"/>
<img src="https://img.shields.io/badge/Responsive-00C853?style=flat-square"/>

</div>

---

# 📋 Table of Contents

- 📖 About
- ✨ Features
- 📁 Project Structure
- 🏗️ Architecture
- 🗄️ Database Schema
- 🚀 Getting Started
- 📑 Pages Overview
- 🔐 Authentication System
- 🎨 UI/UX Design
- 📊 Workflow Diagram
- 🛠 Technologies Used
- 🌍 Browser Compatibility
- 🤝 Contributing
- 📬 Contact
- 📄 License
- 🙏 Acknowledgements

---

# 📖 About

The **Online Car Rental System** is a comprehensive web application that allows users to browse, filter, and book rental cars online. The system features a responsive user interface, secure user authentication, car category filtering, and a professional booking experience.

## 🎯 Key Highlights

- ✅ **Car Browsing** - View all available rental cars with details
- ✅ **Category Filtering** - Filter by Luxury, Economy, SUV, and Van
- ✅ **User Authentication** - Secure sign-in and registration system
- ✅ **Booking System** - Interactive booking forms with date selection
- ✅ **Responsive Design** - Works on all devices
- ✅ **Professional UI** - Modern design with smooth animations
- ✅ **Database Integration** - MySQL backend for data persistence

---

# ✨ Features

| Feature | Description |
|---------|-------------|
| 🏠 **Home Page** | Welcome page with booking form and popular car choices |
| 🚗 **Car Listings** | Display all available cars with details and pricing |
| 🔍 **Category Filter** | Filter cars by Luxury, Economy, SUV, or Van |
| 📝 **Booking Form** | Interactive form for location, dates, and car selection |
| 🔐 **User Authentication** | Secure sign-in and sign-up system |
| 👤 **User Registration** | Complete registration with validation |
| 🔒 **Password Security** | Password hashing for secure storage |
| 📱 **Responsive UI** | Works on desktop, tablet, and mobile |
| 🎨 **Modern Design** | Gradient backgrounds and smooth animations |
| 📬 **Contact Page** | Professional contact information |
| ℹ️ **About Page** | Company information and mission |

---

# 📁 Project Structure

```text
-Online-Car-Rental-System/
│
├── README.md
├── home.php                        # Homepage with booking form
├── service.php                     # Car listings with filtering
├── about.php                       # About Us page
├── contactus.php                   # Contact information
├── signin.php                      # User login page
├── signup.php                      # User registration page
├── c-logo.png                      # Logo image
├── c.css                           # Custom CSS styles
│
├── Images/
│   ├── bg-light.jpg                # Background image light
│   ├── bg.jpg                      # Background image
│   ├── suv.png                     # SUV car image
│   ├── econo.png                   # Economy car image
│   ├── van.png                     # Van image
│   ├── toyot.jpg                   # Toyota car image
│   ├── ssss.jpg                    # Hyundai car image
│   ├── v.jpg                       # Mercedes car image
│   ├── Search.png                  # Search icon
│   ├── flexilocgo.png              # Flexible rentals icon
│   ├── eco.jpg                     # Economy car image
│   ├── econ.jpg                    # Economy car image
│   ├── e-cono.png                  # Economy car image
│   ├── ss.jpg                      # Car image
│   ├── sss.jpg                     # Car image
│   ├── to.jpg                      # Car image
│   ├── toyin.jpg                   # Car image
│   ├── toyo.jpg                    # Car image
│   ├── vv.jpg                      # Car image
│   └── vvv.jpg                     # Car image
│
└── Database/
    └── car.sql                     # MySQL database schema
---

# 🏗️ Architecture

## 🖥️ System Architecture

```text
┌──────────────────────────────────────────────────────────────┐
│                     Client Browser                           │
│                                                              │
│   HTML5   │   CSS3   │   JavaScript   │   Bootstrap          │
└──────────────────────────────────────────────────────────────┘
                            │
                            ▼
┌──────────────────────────────────────────────────────────────┐
│                     Web Server                               │
│                                                              │
│   PHP   │   Session Management   │   Authentication          │
└──────────────────────────────────────────────────────────────┘
                            │
                            ▼
┌──────────────────────────────────────────────────────────────┐
│                     MySQL Database                           │
│                                                              │
│      Users      │      Cars      │      Bookings            │
└──────────────────────────────────────────────────────────────┘
```

---

# 🗄️ Database Schema

## 👤 Users Table

| Field | Type |
|--------|------|
| id | INT (PK) |
| full_name | VARCHAR(100) |
| username | VARCHAR(50) |
| email | VARCHAR(100) |
| phone | VARCHAR(15) |
| password | VARCHAR(255) |
| city | VARCHAR(50) |
| gender | ENUM |
| age | INT |
| created_at | TIMESTAMP |

---

## 🚗 Cars Table

| Field | Type |
|--------|------|
| id | INT (PK) |
| name | VARCHAR(100) |
| brand | VARCHAR(50) |
| model | VARCHAR(50) |
| year | INT |
| category | ENUM |
| price_per_day | DECIMAL |
| seats | INT |
| fuel_type | ENUM |
| image_path | VARCHAR(255) |
| availability | BOOLEAN |
| created_at | TIMESTAMP |

---

## 📅 Bookings Table

| Field | Type |
|--------|------|
| id | INT (PK) |
| user_id | INT (FK) |
| car_id | INT (FK) |
| pickup_location | VARCHAR(100) |
| pickup_date | DATE |
| return_date | DATE |
| total_price | DECIMAL |
| status | ENUM |
| created_at | TIMESTAMP |

---

# 🚀 Getting Started

## 📋 Requirements

- 🐘 PHP 7.4+
- 🗄️ MySQL 5.7+
- 🌐 Apache / Nginx
- 💻 XAMPP / WAMP / MAMP (Recommended)

---

## 1️⃣ Clone Repository

```bash
git clone https://github.com/maira333-mmm/-Online-Car-Rental-System.git
cd -Online-Car-Rental-System
```

---

## 2️⃣ Create Database

Open **phpMyAdmin**

Create database:

```sql
CREATE DATABASE car;
```

Import your SQL file or create the required tables.

---

## 3️⃣ Configure Database

Update the database connection inside **signin.php** and **signup.php**

```php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "car";

$conn = new mysqli($host,$user,$pass,$db);
```

---

## 4️⃣ Run the Project

### Using XAMPP

1. Copy project into **htdocs**
2. Start Apache
3. Start MySQL
4. Open

```
http://localhost/-Online-Car-Rental-System/home.php
```

---

# 📑 Pages Overview

| Page | Description |
|------|-------------|
| 🏠 Home | Landing page, booking form, featured cars |
| 🚗 Services | Browse available cars |
| ℹ️ About | Company information |
| 🔐 Sign In | User login |
| 📝 Sign Up | New user registration |

---

# 🔐 Authentication Flow

## Sign In

```text
User
   │
   ▼
Enter Email & Password
   │
   ▼
Validate Input
   │
   ▼
Check Database
   │
   ▼
Verify Password
   │
   ▼
Create Session
   │
   ▼
Redirect to Dashboard
```

---

## Sign Up

```text
User
   │
   ▼
Fill Registration Form
   │
   ▼
Validate Data
   │
   ▼
Check Existing Email
   │
   ▼
Hash Password
   │
   ▼
Insert Into Database
   │
   ▼
Redirect to Login
```

---

# 🎨 UI / UX Design

## 🎨 Color Palette

| Color | Hex |
|--------|------|
| 🔴 Primary | #FF0000 |
| ❤️ Dark Red | #CC0000 |
| ⚫ Black | #000000 |
| 🌑 Dark Gray | #2E2E2E |
| ⚪ White | #FFFFFF |

---

### ✨ Design Features

- ✅ Responsive Layout
- ✅ Bootstrap Grid
- ✅ Glassmorphism
- ✅ Smooth Animations
- ✅ Professional Typography
- ✅ Interactive Forms
- ✅ Modern Car Cards

---

# 📊 Workflow

```text
Home
 │
 ▼
Browse Cars
 │
 ▼
View Details
 │
 ▼
Sign In / Register
 │
 ▼
Book Car
 │
 ▼
Booking Saved
 │
 ▼
MySQL Database
```

---

# 🛠️ Technologies Used

| Technology | Purpose |
|------------|----------|
| PHP | Backend |
| MySQL | Database |
| HTML5 | Structure |
| CSS3 | Styling |
| JavaScript | Interactivity |
| Bootstrap | Responsive UI |
| Font Awesome | Icons |
| XAMPP | Local Server |

---

# 🌍 Browser Support

| Browser | Support |
|----------|---------|
| Chrome | ✅ |
| Firefox | ✅ |
| Edge | ✅ |
| Safari | ✅ |
| Opera | ✅ |
| Mobile | ✅ |

---

# ⚙️ Configuration

## Database

```php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "car";

$conn = new mysqli($host,$user,$pass,$db);
```

---

## Session

```php
session_start();

$_SESSION["user_logged_in"] = true;
$_SESSION["user_email"] = $email;
```

---

# 🤝 Contributing

```text
Fork Repository
      │
      ▼
Create Feature Branch
      │
      ▼
Commit Changes
      │
      ▼
Push Branch
      │
      ▼
Open Pull Request
```

### Steps

1. Fork repository

2. Create branch

```bash
git checkout -b feature/AmazingFeature
```

3. Commit

```bash
git commit -m "Add Amazing Feature"
```

4. Push

```bash
git push origin feature/AmazingFeature
```

5. Open Pull Request

---

# 📬 Contact

<div align="center">

### 👩‍💻 Maira Alam

<a href="https://mail.google.com/mail/?view=cm&fs=1&to=maira.alam33@gmail.com">
<img src="https://img.shields.io/badge/Gmail-EA4335?style=for-the-badge&logo=gmail&logoColor=white"/>
</a>

<a href="https://github.com/maira333-mmm">
<img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white"/>
</a>

<a href="https://www.linkedin.com/in/maira-a-48699630b/">
<img src="https://img.shields.io/badge/LinkedIn-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white"/>
</a>

<a href="https://maira-alam-o2p20gi.gamma.site/">
<img src="https://img.shields.io/badge/Portfolio-2563EB?style=for-the-badge&logo=googlechrome&logoColor=white"/>
</a>

</div>

---

# 📄 License

Licensed under the **MIT License**.

---

# 🚀 Future Enhancements

| Feature | Description |
|----------|-------------|
| 💳 Online Payment | Secure payment gateway |
| 📱 Mobile App | Android & iOS |
| 📧 Email Notifications | Booking confirmation |
| 📊 Admin Dashboard | Manage users & cars |
| 🌍 Multi-language | Multiple language support |
| 🗺️ Maps Integration | Pickup locations |
| ⭐ Reviews | User ratings |
| 🤖 AI Chatbot | Customer support |

---

# 🐛 Troubleshooting

<details>
<summary><b>❌ Database Connection Error</b></summary>

```php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "car";
```

Verify your database credentials.

</details>

---

<details>
<summary><b>❌ Session Issues</b></summary>

```php
session_start();
```

Place it at the top of every PHP file.

</details>

---

<details>
<summary><b>❌ Images Not Loading</b></summary>

```html
<img src="images/car.png" alt="Car">
```

Ensure image paths are correct.

</details>

---

# 🙏 Acknowledgements

| Resource | Purpose |
|----------|---------|
| Capsule Render | Header Design |
| Readme Typing SVG | Typing Animation |
| Shields.io | Badges |
| GitHub | Repository Hosting |
| Bootstrap | Responsive UI |
| Font Awesome | Icons |
| PHP.net | PHP Documentation |
| MySQL | Database Documentation |

---

<div align="center">

## ❤️ Built with PHP, MySQL, HTML, CSS & JavaScript

### Made with 💙 by **Maira Alam**

⭐ **If you found this project helpful, consider giving it a star!**

<br>

<a href="https://github.com/maira333-mmm/-Online-Car-Rental-System">
<img src="https://img.shields.io/badge/📂_SOURCE_CODE-181717?style=for-the-badge&logo=github&logoColor=white"/>
</a>

<a href="https://github.com/maira333-mmm/-Online-Car-Rental-System/commits/main">
<img src="https://img.shields.io/github/last-commit/maira333-mmm/-Online-Car-Rental-System?style=for-the-badge&label=LAST%20UPDATE"/>
</a>

</div>
