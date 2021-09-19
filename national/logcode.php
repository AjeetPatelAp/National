<?php
session_start();
if($who=='')
{
	header("location:login.php");
}
$who=$_POST['a'];
//echo $who;
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;

include("connection.php");
if($who=='doctor')
{
$query="select * from tbl_doctor where email='$email' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['doctor']=$email;
	header("Location:doctorprofile.php");
}
else
{
	header("Location:login.php?msg=1");
}
}
else if($who=='patient')
{
$query2="select * from tbl_patient where email='$email' and password='$password'";
$res2=mysql_query($query2);
if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
	$_SESSION['patient']=$email;
	header("Location:patientprofile.php");

}	
else
{
	header("Location:login.php?msg=1");
}
}	
?>