<?php
include("connection.php");
$id=$_REQUEST['id'];
//echo $id;
$query="delete from tbl_appoiment where app_id='$id'";
mysql_query($query);
header("Location:vaa.php");

?>