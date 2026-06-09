<?php
$con = mysqli_connect('localhost', 'root', 'root', 'crud_db');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>