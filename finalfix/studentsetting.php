<?php
include('connect.php');

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $query = "SELECT * FROM student WHERE user_name='$username'";
    $result = mysqli_query($db, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
    } else {
        echo "User not found";
    }
} else {
    header('Location: login.php');
    exit();
}

if (isset($_POST['update_password'])) {
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $confirmNewPassword = $_POST['confirm_new_password'];

    if (($currentPassword) == $row['password'] && $newPassword == $confirmNewPassword) {
        $newEncryptedPassword = ($newPassword);
        $updateQuery = "UPDATE student SET password='$newEncryptedPassword' WHERE user_name='$username'";
        $updateResult = mysqli_query($db, $updateQuery);

        if ($updateResult) {
            header('Location:studentsetting.php');
            echo "Password updated successfully.";
        } else {
            echo "Error updating password: " . mysqli_error($db);
        }
    } else {
        echo "Invalid input.";
    }
}
?>
<!-- php ends here -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="student.css">

    <script src="https://kit.fontawesome.com/a04710cb7f.js" crossorigin="anonymous"></script>

</head>

<body>

    <?php include('sidebar.php'); ?>
    </div>
    <div class="container">
        <div class="header">
            <h2>User Details</h2>
        </div>

        <div class="content">
            <?php if ($row) : ?>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h3>User Details</h3>
                        <table class="table table-bordered">
                            <tbody>
                                <?php foreach ($row as $key => $value) : ?>
                                    <tr>
                                        <td><strong><?php echo $key; ?></strong></td>
                                        <td><?php echo $value; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php else : ?>
                <p class="alert alert-danger">No user found for the provided username.</p>
            <?php endif; ?>
        </div>

        <div class="update-password">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h3>Update Password</h3>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="current_password">Current Password:</label>
                            <input type="password" name="current_password" id="current_password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="new_password">New Password:</label>
                            <input type="password" name="new_password" id="new_password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_new_password">Confirm New Password:</label>
                            <input type="password" name="confirm_new_password" id="confirm_new_password" class="form-control" required>
                        </div>
                        <button type="submit" name="update_password" class="btn btn-update-password">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>