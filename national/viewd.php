<?php
session_start();
$email=$_SESSION['patient'];
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}
error_reporting(0);
include("connection.php");
$did=$_REQUEST['id'];
//echo $did;
$query="select * from tbl_doctor where doctor_id='$did'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
<link href="css/bookcode.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="outer">
<div id="header"><a href="#">
</div>
<div id="headera">
<img src="images/f.png" style="width:25px;height:25px;margin-left:650px;margin-top:4px;"></a>
<a href="#"><img src="images/g.png" style="width:25px;height:25px;margin-left:10px;margin-top:4px;"></a>
<a href="#"><img src="images/i.png" style="width:25px;height:25px;margin-left:10px;margin-top:4px;"></a>
<a href="#"><img src="images/t.png" style="width:25px;height:25px;margin-left:10px;margin-top:4px;"></a>
<div id="headera1"><a href="team/team.php"><b>Team</b></a></div></div>
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
      <li><a href="patientprofile.php"><b>Home</b></a></li>
	  <li><a href="book_app.php"><b>Book Appointment</b></a>
	  </li>
	  <li><a href="viewpatapp.php"><b>View appoiment</b></a>
	  </li>
	  <li><a href="update.php?id=<?php echo $row['0'];?>"><b>Update profile</b></a>
	  </li>
	  <li><a href="changepassword.php"><b>Change password</a></b> </li>
	  <li><a href="discussion.php"><b>Discussion</a></b> </li>
	  <li><a href="logout.php"><b>Logout<b></a>
	  </li>
  </ul>	  
</div>

<form action="bookapp.php" method="post">
<div id="mid">
 <div id="mida">
 <div id="h1"><b>Doctor Profile</b></div>
 <div id="diva">
 <div id="photo"><img src="upload/<?php echo $row['photo'];?>" height="250px" width="250px" style="border-radius:100%"></div>
 <div id="name"><h1><?php echo $row['name'];?></h1>
 <table ><tr><td>
 <input type="hidden" name="did" value="<?php echo $row['0']?>">
 <h4>Father's name</h4></td><td><?php echo $row['fname'];?></td></tr>
 <tr><td><h4>Gender</h4></td><td><?php echo $row['gender'];?></td></tr>
 <tr><td><h4>Email</h4></td><td><?php echo $row['email'];?></td></tr>
 <tr><td><h4>Mobile</h4></td><td><?php echo $row['mobile'];?></td></tr>
 <tr><td><h4>Qulification</h4></td><td><?php echo $row['qualification'];?></td></tr>
 <tr><td><h4>Specialist</h4></td><td><?php echo $row['specialist'];?></td></tr>
 <tr><td><h4>Address</h4></td><td><?php echo $row['address'];?></td></tr>
 <tr><td><h4>Fees</h4></td><td><?php echo $row['fees'];?></td></tr>
 <tr><td><h4>Time</h4></td><td><?php echo $row['timing'];?></td></tr>
 </table>
 <tr><td></td><td></td></tr>
 </div></div>
 </div>
</div>
</div>
</div>
</form>
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
</body>
</html>

<?php
}
?>