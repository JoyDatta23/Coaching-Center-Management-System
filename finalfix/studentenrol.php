<?php
include('connect.php');
$id_query = "SELECT ID,Name,Dep_name,level FROM student WHERE user_name = '" . $_SESSION["username"] . "'";
$id_result = mysqli_query($db, $id_query);
$subCodeArray = array();
if ($id_result) {
    $row = mysqli_fetch_assoc($id_result);
    $id = $row["ID"];
    $dep = $row["Dep_name"];
    $lev = $row["level"];
    $name = $row["Name"];
}
$query = "SELECT s.Sub_code, s.section, s.room_no, s.day1, s.day2, s.time FROM routine r,schedule s WHERE r.S_ID='$id' AND r.Sub_code=s.Sub_code AND r.section=s.section";
$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $subCodeArray[] = $row["Sub_code"];
}
$queryIN = "Select s.name, h.Sub_code, h.Dep_name, h.level, sch.section
            FROM have h
            JOIN schedule sch ON sch.Sub_code = h.Sub_code
            JOIN subject s ON s.code = h.Sub_code
            WHERE h.Dep_name = '$dep' AND h.sub_code NOT IN ('" . implode("','", $subCodeArray) . "') AND h.level='$lev'  ";
$resultIN = mysqli_query($db, $queryIN);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Enrollment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="view.css">

    <link rel="stylesheet" type="text/css" href="sidebar.css">
    <!-- Create a styles.css file for custom styling -->
    <script src="https://kit.fontawesome.com/a04710cb7f.js" crossorigin="anonymous"></script>
</head>

<body style="height: 100vh;">
    <?php include('sidebar.php'); ?>

    <div style="margin-left: 250px;">
        <!-- Content goes here -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- Your navigation menu remains unchanged -->
        </nav>

        <h3 style="text-align: center;">Available Courses For <?php echo $dep ?> Department</h3><br>

        <div class="container">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Sub_code</th>
                        <th>section</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($rowIN = mysqli_fetch_assoc($resultIN)) : ?>
                        <tr>
                            <td><?php echo $rowIN["name"]; ?></td>
                            <td><?php echo $rowIN["Sub_code"]; ?></td>
                            <td><?php echo $rowIN["section"]; ?></td>
                            <td><?php echo $rowIN["level"]; ?></td>
                            <td><a id="edt" href="studentadd.php?id=<?php echo $id; ?>&Sub_code=<?php echo $rowIN["Sub_code"]; ?>&section=<?php echo $rowIN["section"]; ?>" class="btn btn-primary btn-sm">ADD</a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <br>
            <br>
            <?php if (mysqli_num_rows($resultIN) === 0) { ?>
                <h3 class="text-center"><b>No Available Course<b></h3>
            <?php } ?>
        </div>
    </div>
</body>

</html>