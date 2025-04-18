<?php
require_once('connect.php');
$query = "select * from subject inner join schedule on subject.code=schedule.sub_code;";
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
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Subjects</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td> Subject code </td>
                                <td> Subject name </td>
                                <td> Section</td>
                                <td> Room </td>
                                <td> day 1 </td>
                                <td> day 2 </td>
                                <td> Time</td>


                            </tr>
                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                    <td> <?php echo $row["code"]; ?> </td>
                                    <td> <?php echo $row["name"]; ?> </td>
                                    <td> <?php echo $row["section"]; ?> </td>
                                    <td> <?php echo $row["room_no"]; ?> </td>
                                    <td> <?php echo $row["day1"]; ?> </td>
                                    <td> <?php echo $row["day2"]; ?> </td>
                                    <td> <?php echo $row["time"]; ?> </td>
                                    <td><a id="edt" href="editsubject.php?sub_code=<?php echo $row["code"]; ?> & section=<?php echo $row["section"]; ?>" class="btn btn-primary btn-sm">Edit</a></td>



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