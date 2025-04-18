<?php include('connect.php');
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="editsheet.css">
    <link rel="stylesheet" href="view.css">
</head>

<body style="height: 100vh;">
    <div class="header">
        <h2>Update Department Information</h2>
    </div>
    <div class="container">
        <form action="confirm_department_update.php" method="post">

            <div class="form-group">
                <label for="dname">Department:</label>
                <input type="text" name="dname" value=<?php echo $_GET["name"]; ?> readonly>
            </div>
            <div class="form-group">
                <label for="level">Level:</label>
                <input type="text" class="input-group" name="level" value=<?php echo $_GET["level"]; ?> readonly>
            </div>
            <div class="form-group">
                <label for="sub_code">Subject code:</label>
                <input type="text" class="input-group" name="sub_code" required>
            </div>
            <div class="form-group">
                <label for="sub_name">Subject Name:</label>
                <input type="text" class="input-group" name="sub_name" required>
            </div>
            <div class="form-group">
                <label for="section">Subject Section:</label>
                <input type="int" class="input-group" name="section" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <input type="text" class="input-group" name="content" required>
            </div>
            <div class="form-group">
                <label for="room_no">Room:</label>
                <input type="text" class="input-group" name="room_no" required>
            </div>
            <div class="form-group">
                <label for="day1">day 1:</label>
                <input type="text" class="input-group" name="day1" required>
            </div>
            <div class="form-group">
                <label for="day2">day 2:</label>
                <input type="text" class="input-group" name="day2" required>
            </div>
            <div class="form-group">
                <label for="time">time:</label>
                <input type="time" class="input-group" name="time" required>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Add</button>
            <a href="managedepartment.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>

</html>