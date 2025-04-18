<?php 
include("connect.php");
$id=$_GET["id"] ;
mysqli_query($db,"DELETE FROM teacher WHERE ID='$id';");
header("location:manageteacher.php");
exit();
?>