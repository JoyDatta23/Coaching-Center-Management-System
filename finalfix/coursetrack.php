<?php

include('connect.php');

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $currentPage = 'coursetrack';
    $query = "SELECT * FROM teacher WHERE user_name='$username'";
    $result = mysqli_query($db, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $subs = $row['sub_code'];
        // You can fetch other columns as needed
    } else {
        echo "User not found";
    }
} else {
    header('Location: login.php');
    exit();
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

<body style="height: 1300px;">


    <?php include('sidebarteacher.php'); ?>

        <style>
            /* Custom CSS Styles */
            body {
                background-color: #f8f9fa;
                /* Light gray background */
            }

            .header {
                text-align: center;
                margin-top: 20px;
                background-color: #333333;
                color: #FFFFFF;
                /* White text */
                padding: 10px;
            }

            .content {
                margin: 20px;
                background-color: #FFFFFF;
                /* White background */
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0px 0px 10px rgba(2, 2, 2, 2);
                /* Box shadow for a card-like appearance */
            }

            .update-password {
                margin: 20px;
                background-color: #333333;
                padding: 20px;
                border-radius: 5px;
                color: #FFFFFF;
                /* White text */
            }

            .link_format {
                color: red;
                text-decoration: none;
                font-weight: bold;
            }

            .link_format:hover {
                color: white;
                text-decoration: none;
                font-weight: bold;
            }



            /* Change the color of the Update Password button to light red */
            .btn-update-password {
                background-color: #FF0000;
                /* Light red color */
                color: #FFFFFF;
                /* White text */
            }



            /* Add more custom styles as needed */
        </style>

        <div style="margin-left: 250px;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="text-center">User Course</h1>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <tr class="bg-dark text-white">
                                        <td> Subject-Code </td>
                                        <td></td>
                                    </tr>

                                    <tr>

                                        <td> <?php echo $subs; ?> </td>
                                        <td> <a class='link_format' href="coursestudents.php?subs=<?php echo $subs; ?>">View Students</a> </td>

                                    </tr>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>

    </html>