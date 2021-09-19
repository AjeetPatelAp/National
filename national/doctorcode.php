<?php
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$gender=$_POST['a'];
//echo $gender;
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;

$file=$_FILES['file']['name'];
//echo $file;
$size=$_FILES['file']['size'];
//echo $size;
$type=$_FILES['file']['type'];
//echo $type;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$location="upload/";

$qualification=$_POST['q'];
//echo $qualification;
$mobile=$_POST['mobile'];
//echo $mobile;
$specialist=$_POST['spe'];
//echo $specialis;
$address=$_POST['address'];
//echo $address;
$fees=$_POST['fees'];
//echo $fees;
$timing=$_POST['timing'];
//echo $timing;

include("connection.php");
 $query="insert into tbl_doctor(name,fname,gender,email,password,photo,qualification,mobile,specialist,address,fees,timing,date) values ('$name','$fname','$gender','$email','$password','$file','$qualification','$mobile','$specialist','$address','$fees','$timing',curdate())";
mysql_query($query);
move_uploaded_file($tmp_name,$location.$file);
header("location:login.php");
?>