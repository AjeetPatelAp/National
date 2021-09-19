<?php
$name=$_POST['name'];
//echo $name;
$email=$_POST['email'];
//echo $email;

$mobile=$_POST['mobile'];
//echo $mobile;
$message=$_POST['message'];
//echo $message;
include("connection.php");
 $query="insert into tbl_contactus(name,email,mobile,message,date) values ('$name','$email','$mobile','$message',curdate())";
mysql_query($query);
header("location:contactus.php");




?>