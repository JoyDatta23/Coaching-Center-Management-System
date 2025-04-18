<?php

include('connect.php');
$currentPage = 'schedule';
$id_query = "SELECT ID FROM teacher WHERE user_name = '" . $_SESSION["username"] . "'";
$id_result = mysqli_query($db, $id_query);
if ($id_result) {
    $row = mysqli_fetch_assoc($id_result);
    $id = $row["ID"];
}
$query = "select s.Sub_code, s.section, s.room_no, s.day1, s.day2, s.time from routine r,schedule s where r.T_ID='$id' and r.Sub_code=s.Sub_code and r.section=s.section group by s.section";
$result = mysqli_query($db, $query);
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="view.css">

    <script src="https://kit.fontawesome.com/a04710cb7f.js" crossorigin="anonymous"></script>
</head>

<body style="height: 1600px;">
    <?php include('sidebarteacher.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Schedule</h1>
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

</body>