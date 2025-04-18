<?php include('connect.php');
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" type="text/css" href="editsheet.css">
</head>

<body style="height: 100vh;">
    <div class="header">
        <h2>Update student information</h2>
    </div>
    <div class="container">
        <form action="confirm_student_update.php" method="post">
            <div class="form-group">
                <label for="id">Student ID:</label>
                <input type="int" name="id" value=<?php echo $_GET["id"]; ?> readonly>
            </div>
            <div class="form-group">
                <label for="user_name">User Name:</label>
                <input type="text" class="input-group" name="user_name">
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="input-group" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="input-group" name="email">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="input-group" name="phone">
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" class="input-group" name="department">
            </div>
            <div class="form-group">
                <label for="level">Level:</label>
                <input type="text" class="input-group" name="level">
            </div>

            <button type="submit" name="update" class="btn btn-primary">Update</button>
            <a href="managestudent.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>