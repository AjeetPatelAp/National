<?php

?>
<html>
<head>
<link href="css/patient.css" type="text/css" rel="stylesheet">

</head>
<body>
<div id="outer">
<div id="header"><a href="#">
</div>
<div id="headera">
<a href="#"><img src="images/f.png" style="width:25px;height:25px;margin-left:650px;margin-top:4px;"></a>
<a href="#"><img src="images/g.png" style="width:25px;height:25px;margin-left:10px;margin-top:4px;"></a>
<a href="#"><img src="images/i.png" style="width:25px;height:25px;margin-left:10px;margin-top:4px;"></a>
<a href="#"><img src="images/t.png" style="width:25px;height:25px;margin-left:10px;margin-top:4px;"></a>
<div id="headera1"><a href="team.php"><b>Team</b></a></div></div>
<div id="head1">
<div id="heada">
<img src="images/logo.jpg" width="110px" height="110px">
<h1>National Homeopathic Medical Collage,</br>
<h2>Lucknow Utter Pradesh-226010</h2>
</h1>
</div>
<div id="headb"><img src="images/hospital.png" style="width:110px;height:110px;float:right;margin-top:10px;margin-right:100px;">
<div id="headbup"></div>
<div id="headbdown">
	
</div>
</div>
</div>
<div id="head2">
 <ul>
      <li><a href="index.php"><b>HOME</b></a></li>
	  <li><a href="about.php"><b>ABOUT</b></a>
	  </li>
	  <li><a href="doctor.php"><b>DOCTOR</b></a>
	  </li>
	  <li><a href="patient.php"><b>PATIENT</b></a>
	  </li>
	  <li><a href="login.php"><b>LOGIN</b></a>
	  </li>
	  <li><a href="contactus.php"><b>CONTACT US</b></a> </li>
  </ul>
</div>

<div id="mid">
<div id="midl">
</div>
<div id="midr">
<center>
<h1>Register Patient</h1>
<form action="patientcode.php" method="post" enctype="multipart/form-data">
<table>
<tr><td class="td">Name</td><td><input class="ab" type="text" name="name"></td></tr>
<tr><td class="td">Father name</td><td><input class="ab" type="text" name="fname"></td></tr>
<tr><td class="td">Gender</td>
<td><input type="radio" name="a" value="male">Male
<input type="radio" name="a" value="female">Female</td>
</tr>
<tr><td class="td">Email</td><td><input class="ab" type="email" name="email"></td></tr>
<tr><td class="td">Password</td><td><input class="ab" type="password" name="password"></td></tr>
<tr><td class="td">Mobile</td><td><input class="ab" type="number" name="mobile"></td></tr>
<tr><td class="td">Address</td><td><textarea class="ab" name="address"></textarea></td></tr>
<tr><td class="td">PIN</td><td><input class="ab" type="number" name="pin"></td></tr>
<tr><td class="td"></td><td><input class="ab" type="submit" style="background-color:#005555;color:white"/></td></tr>
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