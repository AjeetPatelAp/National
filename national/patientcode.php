<?php
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$gender=$_POST['a'];
//echo $gender;
$email=$_POST['email'];
//echo $email;
$mobile=$_POST['mobile'];
//echo $mobile;
$password=$_POST['password'];
//echo $password;
$address=$_POST['address'];
//echo $address;
$pin=$_POST['pin'];
//echo $pin;

include("connection.php");
$query="insert into tbl_patient(name,fname,gender,email,password,mobile,address,pin,date) values ('$name','$fname','$gender','$email','$password','$mobile','$address','$pin',curdate())";
mysql_query($query);

header("location:login.php");
?>