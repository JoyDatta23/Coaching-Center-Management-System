<?php

    include('connect.php');

    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $quer = "SELECT * FROM teacher WHERE user_name = '$username'";
        $res = mysqli_query($db, $quer);
        if ($row = mysqli_fetch_assoc($res)) {
             $teacher_id = $row['ID'];
        } else {
             echo "User not found";
        }
        $currentPage = 'coursetrack';
        $subs = $_GET['subs'];
        $query = "SELECT * FROM student st JOIN have hv ON st.Dep_name = hv.Dep_name JOIN grades gd ON st.ID = gd.S_id AND hv.Sub_code = 
        gd.sub_code WHERE hv.Sub_code ='$subs' AND gd.T_id = '$teacher_id'";
        $result = mysqli_query($db, $query);

        
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
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="view.css">

    <script src="https://kit.fontawesome.com/a04710cb7f.js" crossorigin="anonymous"></script>
</head>
<body style="height: 5000px;">


    <?php include('sidebarteacher.php');?>


    <style>
        /* Custom CSS Styles */
        body {
            background-color: #f8f9fa; /* Light gray background */
        }

        .header {
            text-align: center;
            margin-top: 20px;
            background-color: #333333; 
            color: #FFFFFF; /* White text */
            padding: 10px;
        }

        .content {
            margin: 20px;
            background-color: #FFFFFF; /* White background */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(2,2,2,2); /* Box shadow for a card-like appearance */
        }

        .update-password {
            margin: 20px;
            background-color: #333333; 
            padding: 20px;
            border-radius: 5px;
            color: #FFFFFF; /* White text */
        }

        .link_format {
            color: red; 
            text-decoration: none;
            font-weight: bold; 
        }

        .link_format:hover {
            color: blue;
            text-decoration: none; 
            font-weight: bold; 
        }

        .link_format {
            color: red; 
            text-decoration: none;
            font-weight: bold; 
        }

        .link_format:hover {
            color: blue;
            text-decoration: none; 
            font-weight: bold; 
        }
       
 

    /* Change the color of the Update Password button to light red */
    .btn-update-password {
        background-color: #FF0000; /* Light red color */
        color: #FFFFFF; /* White text */
    }



        /* Add more custom styles as needed */
    </style>



<div class="container">
<div class="row">
            <div class="col">
                <div class= "card">
                    <div class= "card-header">
                        <h1 class= "text-center">Students Enrolled</h1>
                    </div>
                    <div class="card-body">
                        <table class= "table table-bordered text-center">
                            <tr class= "bg-dark text-white">
                                <td> Student ID </td>
                                <td> Name </td>
                                <td> Email </td>
                                <td> Phone </td>
                                <td> Depatment</td>
                                <td> Grade </td>
                            </tr>
                            <tr>
                            <?php
                                while($row= mysqli_fetch_assoc($result))
                                {
                            ?>
                                
                                 <td> <?php echo $row["ID"];?> </td>
                                 <td> <?php echo $row["name"];?> </td>
                                 <td> <?php echo $row["email"];?> </td>
                                 <td> <?php echo $row["phone"];?> </td>
                                 <td> <?php echo $row["Dep_name"];?> </td>
                                 <?php
                                    if($row["grade"] == null) {
                                        $tid = $row["T_id"];
                                        $sid = $row["S_id"];
                                 ?>
                                        <td> <a class = 'link_format' href="setgrade.php?t_id=<?php echo $tid?>&s_id=<?php echo $sid?>&sub=<?php echo $subs?>">Set Grade</a> </td>
                                 <?php
                                    } else {
                                 ?>
                                        <td> <?php echo $row["grade"];?> </td>
                                 <?php
                                    }
                                ?>                        
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