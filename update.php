<?php
include 'connect.php';

$id = $_GET['updateid'];


$sql = "SELECT * FROM `users` WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

   
    $sql = "UPDATE `users` SET id=$id, name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";
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
    <title>My CRUD App - Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h2 class="mb-4">Update User Details</h2>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" required autocomplete="off">  
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Mobile</label>
            <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>" required autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" name="password" value="<?php echo $password; ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Update</button>
        <a href="display.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
