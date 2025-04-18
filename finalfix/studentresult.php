<?php
include('connect.php');
$id_query = "SELECT ID,Name FROM student WHERE user_name = '" . $_SESSION["username"] . "'";
$id_result = mysqli_query($db, $id_query);
if ($id_result) {
    $row = mysqli_fetch_assoc($id_result);
    $id = $row["ID"];
    $you = $row["Name"];
}
$query = "select  name,S_id,level,sub_code,grade from grades g,student s where g.S_id=s.ID and grade is not Null and S_id=$id order by grade asc";
$result = mysqli_query($db, $query);
?>

<?php $username = $_SESSION['username'] ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Result</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="styles.css">  -->
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="view.css">

    <script src="https://kit.fontawesome.com/a04710cb7f.js" crossorigin="anonymous"></script>

</head>

<body style="height: 100vh;">
    <div class="sidebar">
        <!-- Logo and Welcome Message -->
        <div class="logo-container">
            <img src="image/4.logo.PNG" alt="Logo" class="logo-img">
            <p style="color: white; margin-top: 10px;">Welcome, <?php echo $you; ?></p>
        </div>

        <a href="studentview.php"><i class="fas fa-home"></i> Home</a>
        <a href="studentcourse.php"><i class="fas fa-book"></i> Course Information</a>
        <a href="studentschedule.php"><i class="fas fa-calendar-alt"></i> Class Schedule</a>
        <a href="studentenrol.php"><i class="fas fa-graduation-cap"></i> Course Enrollment</a>
        <a href="studentresult.php" class="active"><i class="fas fa-chart-bar"></i> Result</a>
        <a href="studentsetting.php"><i class="fas fa-cog"></i> Settings</a>
        <a href="home.php"><i class="fas fa-sign-out-alt"></i> Logout</a>

        <!-- Social Media Links -->
        <div class="social-links">
            <ul>
                <li>
                    <a class="nav-link" href="https://www.facebook.com">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="https://www.youtube.com">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="https://www.twitter.com">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div style="margin-left: 250px;">
        <!-- Content goes here -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- Your navigation menu remains unchanged -->
        </nav>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center"><?php echo $you ?>'s Result</h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>Sub_code</td>
                                    <td>Grade</td>
                                </tr>
                                <tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <td><?php echo $row["sub_code"]; ?></td>
                                        <td><?php echo $row["grade"]; ?></td>
                                </tr>
                            <?php
                                    }
                            ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>