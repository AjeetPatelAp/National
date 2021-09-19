<?php
include("connection.php");
$id=$_REQUEST['id'];
//echo $id;
$query="delete from tbl_patient where patient_id='$id'";
mysql_query($query);

$query2="delete from tbl_appoiment where patient_id='$id'";
mysql_query($query2);
header("Location:vap.php");

?>