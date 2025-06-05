# PHP-projects
# PHP-Small_Projects-Stepbystep
# PHP Small Projects – Login/Signup System

This is a beginner-level PHP project demonstrating a simple **User Authentication System** using **PHP**, **MySQL**, **HTML**, and **CSS**.

## 🧰 Features

- ✅ User Registration (Sign Up)
- ✅ Login with Username and Password
- ✅ Basic Session Management
- ✅ Logout functionality
- ✅ Input validation & database interaction
- ✅ Clean, simple frontend using HTML/CSS

## 🗂️ Project Structure
PHP-small-projects/
│
├── connect.php # Database connection logic
├── signup.php # User registration form + PHP logic
├── login.php # Login form + authentication logic
├── logout.php # Logout and session destroy
├── home.php # Welcome page after login
├── style.css # Styling for forms and layout
├── README.md # Project documentation
└── test.sql # SQL to create the 'registration' table

## 🛠️ Prerequisites

- [XAMPP / MAMP / LAMP](https://www.apachefriends.org/index.html) installed locally
- PHP 7.x or newer
- MySQL
- Git (optional, for version control)

## 🧪 Setup Instructions

1. **Clone this repository**:
   ```bash
   git clone https://github.com/Abdul-Hye/PHP-Small_Projects-Stepbystep.git
   cd PHP-Small_Projects-Stepbystep

2. Open phpMyAdmin

Create a database named: test

Run the following SQL: CREATE TABLE `registration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);
3. Run the project:

Place the folder inside htdocs (for XAMPP) or the correct web directory

Visit http://localhost/PHP-small-projects/signup.php in your browser

🚀 Demo Flow
1.Go to signup.php → Create a new user

2.Go to login.php → Login with that user

3.Redirects to home.php

4.Click "Logout" → Redirected to login.php

