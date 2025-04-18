<?php
include('connect.php');
$id_query = "SELECT ID,Name FROM student WHERE user_name = '" . $_SESSION["username"] . "'";
$id_result = mysqli_query($db, $id_query);
if ($id_result) {
    $row = mysqli_fetch_assoc($id_result);
    $id = $row["ID"];
    $name = $row["Name"];
}
$query = "select s.Sub_code, s.section, s.room_no, s.day1, s.day2, s.time from routine r,schedule s where r.S_ID='$id' and r.Sub_code=s.Sub_code and r.section=s.section";
$result = mysqli_query($db, $query);
?>

<?php $username = $_SESSION['username'] ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Schedule</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="styles.css"> Create a styles.css file for custom styling -->
    <link rel="stylesheet" href="sidebar.css"> <!-- Create a styles.css file for custom styling -->
    <script src="https://kit.fontawesome.com/a04710cb7f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view.css">


</head>

<body style="height: 100vh;">

    <?php include('sidebar.php'); ?>

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
                            <h1 class="text-center"> Class Schedule</h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td> Subject-Code </td>
                                    <td> Section </td>
                                    <td> Room-Number </td>
                                    <td> Day-1 </td>
                                    <td> Day-2 </td>
                                    <td> Time </td>
                                </tr>
                                <tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>

                                        <td> <?php echo $row["Sub_code"]; ?> </td>
                                        <td> <?php echo $row["section"]; ?> </td>
                                        <td> <?php echo $row["room_no"]; ?> </td>
                                        <td> <?php echo $row["day1"]; ?> </td>
                                        <td> <?php echo $row["day2"]; ?> </td>
                                        <td> <?php echo $row["time"]; ?> </td>

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
</body>

</html>