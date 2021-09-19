<?php
include("connection.php");
$sid=$_REQUEST['sid'];
$query="select * from tbl_appoiment where app_id='$sid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$status=$row['status'];
}

if($status=='Y')
{
	$query2="update tbl_appoiment set status='N' where app_id='$sid'";
	mysql_query($query2);
	header("location:vaa.php");
}


if($status=='N')
{
	$query2="update tbl_appoiment set status='Y' where app_id='$sid'";
	mysql_query($query2);
	header("location:vaa.php");
}
?>