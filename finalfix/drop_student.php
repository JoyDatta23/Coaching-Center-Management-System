<?php 
include("connect.php");
$id=$_GET["id"] ;
mysqli_query($db,"DELETE FROM student WHERE ID='$id';");
header("location:managestudent.php");
exit();
?>