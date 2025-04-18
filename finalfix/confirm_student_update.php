<?php
include("connect.php");
// Handle form submission
if(isset($_POST['update'])) {
    // ... retrieve student_id ...
    $student_id = $_POST['id'];
    $update_query = "UPDATE student SET ";
    $update_params = array();
 
    if($_POST['user_name']!="") {
        $user_name = $_POST['user_name'];
        $update_query .= "user_name = '$user_name', ";
    }
    if($_POST['name']!="") {
        $name = $_POST['name'];
        $update_query .= "name = '$name', ";
    }
    if($_POST['email']!="") {
        $email = $_POST['email'];
        $update_query .= "email = '$email', ";
    }
    if($_POST['phone']!="") {
        $phone = $_POST['phone'];
        $update_query .= "phone = '$phone', ";
    }
    if($_POST['password']!="") {
        $password = $_POST['password'];
        $update_query .= "password = '$password', ";
    }
    if($_POST['department']!="") {
        $department = $_POST['department'];
        $update_query .= "department = '$department', ";
    }
    if($_POST['level']!="") {
        $level = $_POST['level'];
        $update_query .= "level = '$level', ";
    }
       
    if ($update_query== "UPDATE student SET "){
        header("location:managestudent.php");
        exit();
    }
    // Remove trailing comma and space from update_query
    $update_query = rtrim($update_query, ", ");
    
    // Add WHERE condition to the query
    $update_query .= " WHERE ID = $student_id";
    mysqli_query($db, $update_query);
    header("location:managestudent.php");
    exit();

    // Use prepared statement to update student data
    
}
?>
