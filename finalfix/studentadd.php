<?php
include ('connect.php');
$subcode=$_GET['Sub_code'];
$Sid=$_GET['id'];
$sec=$_GET['section'];

$tid= "SELECT ID  FROM teacher WHERE Sub_code='$subcode';";
$tres = mysqli_query($db, $tid);

$row1 = mysqli_fetch_assoc($tres);
$tid1 = $row1["ID"];


$queryR= "INSERT INTO routine values ('$tid1','$Sid','$subcode','$sec');";
mysqli_query($db, $queryR);

$query="select *from grades WHERE T_id= '$tid1' and S_id='$Sid' and Sub_code='$subcode';";
$val=mysqli_query($db,$query);
if (mysqli_num_rows($val) > 0){
    $ace="Update grades SET grade=NULL WHERE T_id= '$tid1' and S_id='$Sid' and Sub_code='$subcode';";
    mysqli_query($db,$ace);



}

else{

    $queryT= "INSERT INTO grades(T_id,S_id,Sub_code) values ('$tid1','$Sid','$subcode');";
    mysqli_query($db, $queryT);
}
    
header("location:studentschedule.php");


?>