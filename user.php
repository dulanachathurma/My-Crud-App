<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `users` (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My CRUD App - Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; 
        }
    </style>
</head>
<body>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            
            <a href="display.php" class="btn btn-sm btn-outline-secondary mb-3">← Back to Dashboard</a>

            <div class="card shadow border-0 rounded-4 p-4 p-md-5 bg-white">
                <h2 class="fw-bold text-dark mb-4 text-center">Create New Account</h2>
                
                <form method="POST" action="user.php">
                    
                    <div class="mb-4">
                        <label class="form-label fs-5 fw-semibold text-secondary">Name</label>
                        <input type="text" class="form-control form-control-lg rounded-3 fs-6" placeholder="Enter your full name" name="name" required autocomplete="off">  
                    </div>
                    
                    <div class="mb-4">
                        <label class="form-label fs-5 fw-semibold text-secondary">Email Address</label>
                        <input type="email" class="form-control form-control-lg rounded-3 fs-6" placeholder="name@example.com" name="email" required autocomplete="off">
                    </div>

                    <div class="mb-4">
                        <label class="form-label fs-5 fw-semibold text-secondary">Mobile Number</label>
                        <input type="text" class="form-control form-control-lg rounded-3 fs-6" placeholder="e.g. 0771234567" name="mobile" required autocomplete="off">
                    </div>

                    <div class="mb-4">
                        <label class="form-label fs-5 fw-semibold text-secondary">Password</label>
                        <input type="password" class="form-control form-control-lg rounded-3 fs-6" placeholder="Create a strong password" name="password" required>
                    </div>

                    <div class="d-grid mt-5">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg rounded-3 fw-bold py-3 fs-5 shadow-sm">Submit Details</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
</body>
<footer></footer>
    <div class="container text-center py-4">
        <p class="mb-0">© 2026 Dulana CRUD App. All rights reserved.</p>
    </div>
</footer>
</html>