#  Responsive PHP CRUD Application

A clean, modern, and fully mobile-responsive **User Management Dashboard** built using PHP, MySQL, and Bootstrap 5. 

---

### Security Updates

<img width="716" height="1219" alt="security-update" src="https://github.com/user-attachments/assets/ec0e10dc-9006-4456-89cb-c4b762cd9a8f" />

---
##  Tech Stack & Badges
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)

---

##  Key Features

* **📱 100% Mobile Responsive:** Optimized table layouts and responsive wrappers (`table-responsive`) that adapt beautifully to mobile screens without breaking the structure.
* ** Full CRUD Operations:** Seamlessly Create, Read, Update, and Delete user data.
* ** Modern UI/UX:** Styled with soft backgrounds, modern card containers, elegant shadow elements, and clean typography.
* ** Form Validation:** Enhanced user forms with distinct font sizes, large inputs, and built-in JavaScript validation alerts before critical actions like data deletion.

---

##  Project Structure

* `connect.php` - Centralized database connection script.
* `user.php` - Responsive interface to create a new user account with large, structured inputs.
* `display.php` - Main admin dashboard with a scrollable data table for mobile screens.
* `update.php` - User entry modification form mapping existing database array parameters.
* `delete.php` - Execution script to securely handle database record deletion.

---

##  Getting Started & Local Setup

### 1. Prerequisites
Make sure you have a local web server environment installed, such as **XAMPP**, **WAMP**, or **MAMP**.

### 2. Database Configuration
1. Open **phpMyAdmin** (`http://localhost/phpmyadmin`).
2. Create a new database named `crudoperations`.
3. Create a table named `users` with the following schema:
   * `id` (int, Primary Key, Auto Increment)
   * `name` (varchar)
   * `email` (varchar)
   * `mobile` (varchar)
   * `password` (varchar)

### 3. Local Deployment
1. Clone or copy this repository into your local server root directory (e.g., `htdocs` for XAMPP users).
2. Start the Apache and MySQL modules from your server control panel.
3. Open your web browser and navigate to:
   ```http
   http://localhost/CRUD PHP/display.php

  Live Link : https://dulanacrud.infy.click
   
