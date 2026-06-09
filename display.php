<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My CRUD App - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-4 my-md-5">
   <div class="d-flex flex-row justify-content-between align-items-center mb-4">
    <h2 class="m-0 fs-4 fs-md-2">User Management Dashboard</h2>
    <a href="user.php" class="btn btn-primary px-4 shadow-sm">Add User</a>
</div>

    <div class="table-responsive shadow-sm rounded border">
        <table class="table table-striped table-hover align-middle mb-0" style="min-width: 600px;">
            <thead class="table-dark">
                <tr>
                    <th scope="col" style="width: 8%;">ID</th>
                    <th scope="col" style="width: 25%;">Name</th>
                    <th scope="col" style="width: 25%;">Email</th>
                    <th scope="col" style="width: 17%;">Mobile</th>
                    <th scope="col" style="width: 15%;">Password</th>
                    <th scope="col" style="width: 10%; text-align: center;">Operations</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $sql = "SELECT * FROM `users`";
            $result = mysqli_query($con, $sql);
            
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    $password = $row['password'];

                    echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td class="text-break">'.$name.'</td>
                        <td class="text-break">'.$email.'</td>
                        <td>'.$mobile.'</td>
                        <td>'.$password.'</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="update.php?updateid='.$id.'" class="btn btn-sm btn-success me-2">Update</a>
                                <a href="delete.php?deleteid='.$id.'" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure you want to delete this user?\')">Delete</a>
                            </div>
                        </td>
                    </tr>';
                }
            }
            ?>

            </tbody>
        </table>
    </div>
    </div>
</body>
</html>