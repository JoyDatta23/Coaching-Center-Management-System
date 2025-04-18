<?php
require_once('connect.php');
$query = "select *from student";
$result = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="view.css">

    <script src="https://kit.fontawesome.com/a04710cb7f.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include('sidebaradmin.php'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Students</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <tr class="bg-dark text-white">
                        <td> Student ID </td>
                        <td> User name </td>
                        <td> Name </td>
                        <td> Email </td>
                        <td> Password </td>
                        <td> Phone </td>
                        <td> Department </td>
                        <td> Level </td>
                        <td> Enroll Date </td>

                    </tr>
                    <tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                            <td> <?php echo $row["ID"]; ?> </td>
                            <td> <?php echo $row["user_name"]; ?> </td>
                            <td> <?php echo $row["name"]; ?> </td>
                            <td> <?php echo $row["email"]; ?> </td>
                            <td> <?php echo $row["password"]; ?> </td>
                            <td> <?php echo $row["phone"]; ?> </td>
                            <td> <?php echo $row["Dep_name"]; ?> </td>
                            <td> <?php echo $row["level"]; ?> </td>
                            <td> <?php echo $row["enroll_date"]; ?> </td>
                            <td><a id="edt" href="edit_student.php?id=<?php echo $row["ID"]; ?>" class="btn btn-primary btn-sm">Edit</a></td>
                            <td><a id="rmv" href="drop_student.php?id=<?php echo $row["ID"]; ?>" class="btn btn-primary btn-sm">Remove</a></td>


                    </tr>
                <?php
                        }
                ?>
                </table>

            </div>
        </div>

</body>