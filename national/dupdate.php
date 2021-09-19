<?php
session_start();
$email=$_SESSION['doctor'];
if($_SESSION['doctor']=="")
{
	session_destroy();
	header("Location:login.php");
}
//echo "<br/>";
include("connection.php");
$email=$_SESSION['doctor'];

$id=$_REQUEST['id'];
//echo $id;
$query="select * from tbl_doctor where doctor_id='$id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
<link href="css/dupdate.css" type="text/css" rel="stylesheet">

</head>
<body>
<div id="outer">
<div id="header"><a href="#">
</div>
<div id="headera"><img src="images/f.png" style="width:25px;height:25px;margin-left:650px;margin-top:4px;"></a>
<a href="#"><img src="images/g.png" style="width:25px;height:25px;margin-left:10px;margin-top:4px;"></a>
<a href="#"><img src="images/i.png" style="width:25px;height:25px;margin-left:10px;margin-top:4px;"></a>
<a href="#"><img src="images/t.png" style="width:25px;height:25px;margin-left:10px;margin-top:4px;"></a><div id="headera1"><a href="team/team.php"><b>Team</b></a></div></div>
<div id="head1">
<div id="heada">
<img src="images/logo.jpg" width="110px" height="110px">
<h1>National Homeopathic Medical Collage,</br>
<h2>Lucknow Utter Pradesh-226010</h2>
</h1>
</div>
<div id="headb">
<img src="images/hospital.png" style="width:110px;height:110px;float:right;margin-top:10px;margin-right:100px;">
<div id="headbup"></div>
<div id="headbdown">
	
</div>
</div>
</div>
<div id="head2">
<ul>
   <li><a href="doctorprofile.php"><b>Home</b></a></li>
	  </li>
	  <li><a href="viewapp.php"><b>View appoiment</b></a>
	  </li>
	  <li><a href="dupdate.php?id=<?php echo $row['0'];?>"><b>Update profile</b></a>
	  </li>
	  <li><a href="dchangepassword.php"><b>Change password</b></a> </li>
	  <li><a href="logout.php"><b>Logout</b></a>
	  </li>
  </ul>
</div>

<div id="diva">
<div id="table"><center>
<form action="dupdatecode.php" method="post">
<h1>Update Profile</h1>
<img src="upload/<?php echo $row['photo'];?>" height="150px" width="150px" style="border-radius:100%">
    <table width="200px" height="400px">
	   <tr><td></td><td><input type="hidden" name="id" value="<?php echo $row['doctor_id'];?>" readonly="true"></td></tr>
	   <tr><td>Name :</td><td><input type="text" name="name" value="<?php echo $row['name'];?>"></td></tr>
	   <tr><td>Fname :</td><td><input type="text" name="fname" value="<?php echo $row['fname'];?>"></td></tr>
	   <tr><td>Gender</td><td><input type="radio" name="a" value="male"<?php if($row['gender']=='male'){?>checked<?php }?> >Male
       <input type="radio" name="a" value="female" <?php if($row['gender']=='female'){?>checked<?php }?> >Female</td></tr>
	   <tr><td>Qualification:</td><td>
	   <input type="radio" name="q" value="phd"<?php if($row['qualification']=='phd'){?>checked<?php }?>>PHD
       <input type="radio" name="q" value="mbbs" <?php if($row['qualification']=='mbbs'){?>checked<?php }?> >MBBS
	   <input type="radio" name="q" value="msc" <?php if($row['qualification']=='msc'){?>checked<?php }?> >MSC
	   </td></tr>
	   <tr><td>Specialist:</td><td><input type="text" name="specialist" value="<?php echo $row['specialist'];?>"></td></tr>
	   <tr><td>Email:</td><td><input type="text" value="<?php echo $row['email'];?>" readonly="true"></td></tr>
	   <tr><td>Mobile:</td><td><input type="text" name="mobile" value="<?php echo $row['mobile'];?>"></td></tr>
	   <tr><td>Address:</td><td><input type="text" name="address"value="<?php echo $row['address'];?>"></td></tr>
	   <tr><td>Fees:</td><td><input type="text" name="fees" value="<?php echo $row['fees'];?>"></td></tr>
	   <tr><td>Date:</td><td><input type="text" value="<?php echo $row['date'];?>" readonly="true"></td></tr>
	   <tr><td></td><td><input type="submit" value="Update"/></td></tr>
	</table>
	</form>
	</center>
	</div>
</div>

  <div id="footer">
          <div id="f1"><center>
		    <h3>STAY CONNECTED</h3>
			<h4>Join Over 10,5000 pepople</br>
			who receive bil-weekly web markething tips.</h4>
			</br></br>
			<input type="text" placeholder="Email-Address"style="width:200px; height:25px; border-radius:5px;text-align:center">
			<input type="submit" value="sin-up" style="width:80px;color:white;background-color:#008080; height:25px;border-radius:5px;"></br> </br>
			<div class="ap"><img src="images/f.png" width="50px" height="50px" style="border-radius:100%"></div>
			<div class="ap"><img src="images/t.png" width="50px" height="50px" style="border-radius:100%"></div>
			<div class="ap"><img src="images/g.png" width="50px" height="50px" style="border-radius:100%"></div>
			<div class="ap"><img src="images/i.png" width="50px" height="50px" style="border-radius:100%"></div>
			</center>
		  </div>
		  
		  <div id="f2">
		  <center>
		  <h3>COMMINTTED INDIA</h3>
		  <h4>
		     The mission of Sibley Memorial Hospital is to provide quality health services and facilities for the community, to promote wellness, to relieve suffering, and to restore health as swiftly, safely, and humanely as it can be done, consistent with the best service we can give at the highest value for all concerned.
		  </h4>
		  </center>
		  </div>
		  
		  <div id="f3">
		  <center>
		  <h3>QUICK CONTACTS</h3>
		  <h4>Enter name</h4>
		  <input type="text" placeholder="Enter your name" style="height:30px;text-align:center;border-radius:5px;"></br>
		  <h4>Your message</h4>
		  <textarea placeholder="Message" style="text-align:center;border-radius:5px;height:30px;"></textarea></br>
		  <input type="submit" value="Send" style="text-align:center;margin-top:10px;width:100px;height:30px;border-radius:5px;">
		  </center>
		  </div>
  </div>  
  <div id="footer2"><center>
  <h4>
 This website is Designed & Developed by: Ajeet patel(Softpro India Computer Technologies) (P) Ltd, Lucknow (U.P.)
 </h4></center>
  </div>

</div>
<?php
}
?>