<?php
include("connection.php");
$id=$_REQUEST['id'];
//echo $id;
$query="delete from tbl_contactus where contact_id='$id'";
mysql_query($query);
header("Location:vac.php");

?>