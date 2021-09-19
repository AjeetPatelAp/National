<?php
session_start();
include("connection.php");
$qid=$_POST['qid'];
//echo $qid;
$ans=$_POST['ans'];
//echo $ans;
$email=$_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['0'];
}
$query2="insert into tbl_answer(ques_id,patient_id,answer,date) values ('$qid','$pid','$ans',curdate())";
mysql_query($query2);
header("location:discussion.php");
?>