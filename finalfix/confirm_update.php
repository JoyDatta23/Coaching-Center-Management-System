<?php
// Handle form submission
if(isset($_POST['update'])) {
    // ... retrieve student_id ...
    $student_id = $_POST['id'];
    $update_query = "UPDATE student SET ";
    $update_params = array();
 
    if(isset($_POST['user_name'])) {
        $user_name = $_POST['user_name'];
        $update_query .= "user_name = '$user_name', ";
    }
    if(isset($_POST['name'])) {
        $name = $_POST['name'];
        $update_query .= "name = '$name', ";
    }
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        $update_query .= "email = '$email', ";
    }
    if(isset($_POST['phone'])) {
        $phone = $_POST['phone'];
        $update_query .= "phone = '$phone', ";
    }
    if(isset($_POST['department'])) {
        $department = $_POST['department'];
        $update_query .= "department = '$department', ";
    }
    if(isset($_POST['level'])) {
        $level = $_POST['level'];
        $update_query .= "level = '$level', ";
    }
       
    
    // Remove trailing comma and space from update_query
    $update_query = rtrim($update_query, ", ");
    
    // Add WHERE condition to the query
    $update_query .= "WHERE ID = $student_id";

    // Use prepared statement to update student data
    $stmt = mysqli_prepare($db, $update_query);
    mysqli_stmt_execute($stmt);
    
    // Redirect back to the student list page after updating
    header("location:managestudent.php");
    exit();
}
?>
