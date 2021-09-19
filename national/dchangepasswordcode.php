<?php
session_start();
include("connection.php");
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;
$email= $_SESSION['doctor'];
$query="select * from  tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pp=$row['password'];
}
if($pp==$op)
{
	//echo "change hoga";
	if($op==$np)
	{
		header("location:changepassword.php");
	}
	else if($np==$cnp)
	{
	$query2="update tbl_doctor set password='$np' where email='$email' ";
	mysql_query($query2);
	header("location:doctorprofile.php");
	}
	else
	{
		header("location:changepassword.php");
	}
}
else
{
	header("location:changepassword.php");
}
?>