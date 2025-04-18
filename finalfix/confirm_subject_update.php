<?php
include("connect.php");
// Handle form submission
if(isset($_POST['update'])) {
    // ... retrieve student_id ...
    $sub_code = $_POST['sub_code'];
    $section = $_POST['section'];
    $update_query1 = "UPDATE subject SET ";
    $update_query2 = "UPDATE schedule SET ";
    $update_params = array();
 
    if($_POST['name']!="") {
        $name = $_POST['name'];
        $update_query1 .= "name = '$name' ";
        
    }
    if($_POST['room_no']!="") {
        $room= $_POST['room_no'];
        $update_query2 .= "room_no = '$room', ";
    }
    if($_POST['day1']!="") {
        $day1= $_POST['day1'];
        $update_query2 .= "day1 = '$day1', ";
    }
    if($_POST['day2']!="") {
        $day2= $_POST['day2'];
        $update_query2 .= "day2 = '$day2', ";
    }
    if($_POST['time']!="") {
        $time= $_POST['time'];
        $update_query2 .= "time = '$time', ";
    }
       
    if ($update_query1== "UPDATE subject SET "){
        header("location:managesubject.php");
        exit();
    }
    if ($update_query2== "UPDATE schedule SET "){
        $update_query1 .= " WHERE code = '$sub_code';";
        mysqli_query($db, $update_query1);
        header("location:managesubject.php");
        exit();
    }
    
    // Remove trailing comma and space from update_query
    $update_query2 = rtrim($update_query2, ", ");
    
    // Add WHERE condition to the query
    
    $update_query2 .= " WHERE sub_code = '$sub_code' and section = '$section';";
    mysqli_query($db, $update_query2);

    
    // Use prepared statement to update student data
    
}
?>