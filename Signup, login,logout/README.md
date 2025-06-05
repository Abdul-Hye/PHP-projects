PHP Small Projects – Login/Signup System
This is a beginner-level PHP project demonstrating a simple User Authentication System using PHP, MySQL, HTML, and CSS.

🧰 Features
✅ User Registration (Sign Up)

✅ Login with Username and Password

✅ Basic Session Management

✅ Logout Functionality

✅ Input Validation & Database Interaction

✅ Clean, Simple Frontend using HTML/CSS

🗂️ Project Structure
pgsql
PHP-small-projects/
│
├── connect.php         # Database connection logic  
├── signup.php          # User registration form + PHP logic  
├── login.php           # Login form + authentication logic  
├── logout.php          # Logout and session destroy  
├── home.php            # Welcome page after login  
├── style.css           # Styling for forms and layout  
├── README.md           # Project documentation  
└── test.sql            # SQL to create the 'registration' table  
🛠️ Prerequisites
XAMPP / MAMP / LAMP installed

PHP 7.x or newer

MySQL

Git (optional, for version control)

🧪 Setup Instructions
Clone this repository:

git clone https://github.com/Abdul-Hye/PHP-Small_Projects-Stepbystep.git
cd PHP-Small_Projects-Stepbystep
Set up the MySQL database:

Open phpMyAdmin

Create a database named: test

Run the following SQL query:

sql

CREATE TABLE `registration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);
Run the project:

Move the project folder to htdocs (for XAMPP) or the correct web directory

Start Apache and MySQL from XAMPP

Visit: http://localhost/PHP-small-projects/signup.php

🚀 Demo Flow
Go to signup.php → Create a new user

Go to login.php → Login with that user

Redirects to home.php

Click "Logout" → Redirected to login.php
