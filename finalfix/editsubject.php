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
        <h2>Update Subject information</h2>
    </div>

    <div class="container">
        <form action="confirm_subject_update.php" method="post">
            <div class="form-group">
                <label for="sub_code">Subject code</label>
                <input type="text" name="sub_code" value=<?php echo $_GET["sub_code"]; ?> readonly>
            </div>
            <div class="form-group">
                <label for="section">Section</label>
                <input type="int" name="section" value=<?php echo $_GET["section"]; ?> readonly>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <?php
                $sub_code = $_GET["sub_code"];
                $query = "SELECT name FROM subject WHERE code='$sub_code'";
                $result = mysqli_query($db, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $subject_name = $row["name"];
                } else {
                    $subject_name = "";
                }
                ?>
                <input type="text" class="input-group" name="name" value="<?php echo htmlspecialchars($subject_name); ?>">
            </div>
            <div class="form-group">
                <label for="room_no">Room:</label>
                <input type="text" class="input-group" name="room_no">
            </div>
            <div class="form-group">
                <label for="day1">day 1:</label>
                <input type="text" class="input-group" name="day1">
            </div>
            <div class="form-group">
                <label for="day2">day 2:</label>
                <input type="text" class="input-group" name="day2">
            </div>
            <div class="form-group">
                <label for="time">time:</label>
                <input type="time" class="input-group" name="time">
            </div>

            <button type="submit" name="update" class="btn btn-primary">Update</button>
            <a href="managesubject.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>