#Online Voting System

A web-based voting application designed to provide a secure, efficient, and user-friendly platform for conducting elections online.
This project allows admins to create and manage elections while users can register, log in, and cast their votes securely.


#Features

*User Features
-User registration & login
-Secure password authentication
-Cast vote only once
-View candidates and election details

*Admin Features
-Admin login
-Add/manage candidates
-Create/manage elections
-View results
-Manage voters

*System Features
-Web-based interface
-Session-based authentication
-SQL database for storing user & voting data
-Prevents duplicate voting
-Simple and clean UI


# Project Structure

/Online-Voting-System
│── index.html / index.php
│── login.php
│── register.php
│── vote.php
│── admin/
│── candidate/
│── css/
│── js/
│── images/
│── database/
│── README.md


#Technologies Used

*Frontend:- HTML, CSS, JavaScript
*Backend:- PHP
*Database:- MySQL
*Server:- XAMPP 


#Installation Guide

Follow these steps to run the project on your system:

1. Install Required Software
Install XAMPP or WAMP
Install Any modern browser

2. Download the Project

Clone the repository:
git clone https://github.com/Amolkottalagi/Online-Voting-System.git
Or download ZIP file and extract it.

3. Move to Server Directory

Copy the project folder to:
XAMPP → htdocs
WAMP → www

4. Start Apache & MySQL

Open XAMPP Control Panel → Start Apache and MySQL.

5. Open Project in Browser
http://localhost/Online-Voting-System/

🗄️ Database Setup

Open phpMyAdmin
Create a new database (example: online_voting_db)
Import the SQL file:
sql/database.sql
Update database credentials (if required) inside your PHP files.

🔑 Demo Credentials
Use these credentials to test the system:
(You may change them later)
Admin Login
Username: admin
Password: admin123
Voter Login (Example)
Username: voter1
Password: voter123


#Future Improvements

*OTP/email verification
*Blockchain-based vote security
*Live vote count refresh
*Mobile app version
