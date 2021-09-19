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
$pin=$_POST['pin'];
//echo $pin;

 $query="update tbl_patient set name='$name',fname='$fname', gender='$gender',mobile='$mobile', address='$address', pin='$pin' where patient_id='$id'";
mysql_query($query);
header("location:patientprofile.php");
?>