<?php
include("connect.php");
// Handle form submission
if(isset($_POST['set'])) {

    $student_id = $_POST['sid'];
    $teacher_id = $_POST['tid'];
    $subject_code = $_POST['sub'];
 
    if($_POST['grade']!="") {
        $grade = $_POST['grade'];
        $query = "UPDATE grades SET grade = '$grade' WHERE S_id = '$student_id' AND T_id = '$teacher_id'";
        mysqli_query($db, $query);
        $query = "DELETE from routine WHERE S_id = '$student_id' AND T_id = '$teacher_id' and Sub_code='$subject_code';";
        mysqli_query($db, $query);
        header("location:coursestudents.php?subs=$subject_code");
        exit();
    } else {
        header("location:coursestudents.php?subs=$subject_code");
        exit();
    }
}
?>
