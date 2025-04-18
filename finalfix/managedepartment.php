<?php
require_once('connect.php');
$query = "select * from department order by name, level";
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
                        <h1 class="text-center">Departments</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td> Department Name </td>
                                <td> Level </td>
                                <td>subjects</td>

                            </tr>
                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                    <td> <?php echo $row["name"]; ?> </td>
                                    <td> <?php echo $row["level"]; ?> </td>
                                    <td>
                                        <?php
                                        $query1 = "SELECT sub_code FROM have WHERE dep_name = '{$row['name']}' AND level = '{$row['level']}' ORDER BY sub_code";
                                        $result1 = mysqli_query($db, $query1);
                                        while ($column = mysqli_fetch_assoc($result1)) {
                                            echo $column["sub_code"] . "<br>";
                                        }
                                        ?>
                                    <td><a id="edt" href="edit_department.php?name=<?php echo $row["name"]; ?>& level=<?php echo $row["level"]; ?>" class="btn btn-primary btn-sm">Add</a></td>

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