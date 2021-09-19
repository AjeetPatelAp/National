<?php
session_start();
include("connection.php");
$email=$_SESSION['patient'];
$ques=$_POST['ques'];
//echo $ques;

$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['0'];
}
$query2="insert into tbl_question(patient_id,question,date) values ('$pid','$ques',curdate())";
mysql_query($query2);
header("location:discussion.php");
?>