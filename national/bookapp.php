<?php
session_start();
include("connection.php");
$email=$_SESSION['patient'];
//echo $email;
$did=$_POST['did'];
//echo $did;
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	 $pid=$row['0'];
}
$query2="insert into tbl_appoiment(patient_id,doctor_id,status,date) values ('$pid','$did','Y',curdate())";
mysql_query($query2);
header("location:viewpatapp.php");
?>