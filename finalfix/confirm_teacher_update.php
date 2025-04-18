<?php
include("connect.php");
// Handle form submission
if(isset($_POST['update'])) {
    // ... retrieve student_id ...
    $teacher_id = $_POST['id'];
    $update_query = "UPDATE teacher SET ";
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
    if($_POST['subject']!="") {
        $subject = $_POST['subject'];
        $update_query .= "sub_code = '$subject', ";
    }
    if($_POST['salary']!="") {
        $salary = $_POST['salary'];
        $update_query .= "salary = '$salary', ";
    }
       
    if ($update_query== "UPDATE student SET "){
        header("location:managestudent.php");
        exit();
    }
    // Remove trailing comma and space from update_query
    $update_query = rtrim($update_query, ", ");
    
    // Add WHERE condition to the query
    $update_query .= " WHERE ID = $teacher_id";
    mysqli_query($db, $update_query);
    header("location:manageteacher.php");
    exit();

    // Use prepared statement to update student data
    
}
?>
