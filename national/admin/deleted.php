<?php
include("connection.php");
$id=$_REQUEST['id'];
//echo $id;
$query="delete from tbl_doctor where doctor_id='$id'";
mysql_query($query);
header("Location:vad.php");

$query2="delete from tbl_appoiment where doctor_id='$id'";
mysql_query($query2);
header("Location:vad.php");
?>