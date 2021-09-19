<?php
session_start();
include("connection.php");
$id=$_POST['id'];
//echo $id;
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$gender=$_POST['a'];
//echo $gender;
$mobile=$_POST['mobile'];
//echo $mobile;
$address=$_POST['address'];
//echo $address;
$fees=$_POST['fees'];
//echo $fees;
$qualification=$_POST['q'];
//echo $qualification;
$specialist=$_POST['specialist'];
//echo $specialist;
 $query="update tbl_doctor set name='$name',fname='$fname', gender='$gender',qualification='$qualification', specialist='$specialist', mobile='$mobile', address='$address', fees='$fees' where doctor_id='$id'";
mysql_query($query);
header("location:doctorprofile.php");
?>