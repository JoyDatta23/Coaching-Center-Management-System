<?php include("connect.php");
// Start a session

// Handle form submission
if (isset($_POST['update'])) {
    $dep_name = $_POST['dname'];
    $level = $_POST['level'];
    $sub_name = $_POST['sub_name'];
    $code = $_POST['sub_code'];
    $sec = $_POST['section'];
    $room= $_POST['room_no'];
    $day1= $_POST['day1'];
    $day2= $_POST['day2'];
    $time= $_POST['time'];
    // Check if the form data is valid before setting session variables


    $insert_query = "INSERT INTO subject VALUES ('$code', '$sub_name');";
    mysqli_query($db, $insert_query);
    $contents = $_POST['content'];
    $content = explode(',', $contents);
    foreach ($content as $con) {
        mysqli_query($db, "INSERT INTO sub_content VALUES ('$code', '$con');");
    }
    mysqli_query($db, "INSERT INTO have VALUES ('$code', '$dep_name','$level');");
    mysqli_query($db,"INSERT INTO schedule values ('$code','$sec','$room','$day1','$day2','$time')");
    

    header("location: managedepartment.php");
    exit();
    // Add further validation and error handling as needed
}
?>