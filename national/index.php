<?php

?>
<html>
<head>
<link href="css/index.css" type="text/css" rel="stylesheet">
<script>
var arr=["images/1.jpg","images/2.jpg","images/3.jpg","images/4.jpg","images/5.jpg"];
index=0;
function next()
{
index++;
if(index==arr.length)
index=0;
document.getElementById("mypic").src=arr[index];
window.setTimeout("next()",2000);
}
</script>
</head>
<body onload="next()">
<div id="outer">
<div id="header"><a href="#">
</div>
<div id="headera">
<a href="#"><img src="images/f.png" style="width:25px;height:25px;margin-left:650px;margin-top:4px;"></a>
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

<div id="head3">

<img src="images/1.jpg" id="mypic" width="1340px" height="500px">
</div>

<div id="mid">
<h1>WELCOME</h1>
<h2>TO OUR HOSPITAL</h2>
<p>Seattle Mennonite Church is an Anabaptist Christian community. As disciples of Jesus, we believe</br> faith and action are inseparable elements in each person’s pilgrimage. In our journey together as</br> a community of believers, we have named several areas of giftedness and calling (i.e., charisms). </br>These charisms are gifts that God has given us for the ministries that God has set before us:</p>
</div>

<div id="mid2"><div id="empty"></div>
<h1>OUR</h1><h2>SERVICES</h2>
<div id="mida">
<div id="midal">

<div class="img"><img src="images/d.png" width="80px" height="80px" ></div>
<div class="img"><img src="images/e.png" width="80px" height="80px"></div>
<div class="img"><img src="images/gg.png" width="80px" height="80px"></div>
<div class="img"><img src="images/v.png" width="80px" height="80px"></div>
</div>
<div id="midar">
<div class="h1"><h3>Dental facility</h3><p>An experienced Dental surgeon provides procedures like Dental Extractions, RCT, Scaling /Cleaning, Fillings, Local curettage.</br></br></p></div>
<div class="h1"><h3>Physiotherapy</h3><p>Range of physiotherapy services to assist the patients to recover from wide range of musculoskeletal pain-ful disorders. Available modalities are MWD, SWD, U/S, TENS, IFC laser therapy traction unit, magnolia</p></div>
<div class="h1"><h3>Timings</h3><p>24 hours and 7 days open</br></br></p></div>
<div class="h1"><h3>Ambulance Services</h3>
<p>24 hours patient transport vehicle available. Patients are transported from home (on campus) to IIT hospital and patients referred by emergency duty doctor to empanelled hospital for specialized case</p>
</h1>
</div>
</div>
</div>


<div id="mid3">
</div>

<div id="h4"> <h4>EXTRA TREATMENT</h1><h4></div>
<div id="mid4">
      <div  class="b"><a href="#"><img src="images/service_1.png"/></a></div>
 <div  class="b"><a href="#"><img src="images/service_2.png" /></a></div>
 <div  class="b"><a href="#"><img src="images/service_5.png"/></a></div>
 <div  class="b"><a href="#"><img src="images/service_4.png"/></a></div>
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
</body>
</html>