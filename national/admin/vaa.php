<?php
include("connection.php");
$query="select * from tbl_appoiment";
$res=mysql_query($query);

?>
<html>
<head>
<link href="../css/vaa.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="outer">
<div id="header"><a href="#">
</div>
<div id="headera"><a href="#"><img src="../images/f.png" style="width:25px;height:25px;margin-left:650px;margin-top:4px;"></a>
<a href="#"><img src="../images/g.png" style="width:25px;height:25px;margin-left:10px;margin-top:4px;"></a>
<a href="#"><img src="../images/i.png" style="width:25px;height:25px;margin-left:10px;margin-top:4px;"></a>
<a href="#"><img src="../images/t.png" style="width:25px;height:25px;margin-left:10px;margin-top:4px;"></a><div id="headera1"><a href="../team/team.php"><b>Team</b></a></div></div>
<div id="head1">
<div id="heada">
<img src="../images/logo.jpg" width="110px" height="110px">
<h1>National Homeopathic Medical Collage,</br>
<h2>Lucknow Utter Pradesh-226010</h2>
</h1>
</div>
<div id="headb"><img src="../images/hospital.png" style="width:110px;height:110px;float:right;margin-top:10px;margin-right:100px;">
<div id="headbup"></div>
<div id="headbdown">
	
</div>
</div>
</div>

<div id="head2">
  <ul>
      <li><a href="adminprofile.php"><b>HOME</b></a></li>
	  <li><a href="vad.php"><b>VIEW ALL DOCTOR</b></a>
	  </li>
	  <li><a href="vap.php"><b>VIEW ALL PATIENT</b></a>
	  </li>
	  <li><a href="vaa.php"><b>VIEW APPOINTMENTS</b></a></li>
	  <li><a href="vac.php"><b>VIEW ALL CONTACT</b></a> </li>
	  <li><a href="changepassword.php"><b>CHANGE PASSWORD</b></a>
	  <li><a href="logout.php"><b>LOGOUT</b></a>
	  </li>
  </ul>	 
      	  
</div>

<div id="mid">
<center>
<table border="1" align="center"  cellspacing="0px">
<tr>
<th>S. No</th>
<th>Patient name</th>
<th>Doctor name</th>
<th>Status</th>
<th>Date</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
	<td><?php echo $a; ?></td>
	<td><?php $pid=$row['patient_id']; 
	$query2="select * from tbl_patient where patient_id='$pid'";
	$res2=mysql_query($query2);
	if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
	{
		echo $row2['name'];
	}
	
	?></td>
	<td><?php  $did=$row['doctor_id'];
	$query3="select * from tbl_doctor where doctor_id='$did'";
	$res3=mysql_query($query3);
	if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
	{
		echo $row3['name'];
	}
	?></td>
	<td class="td"><a href="statusvaa.php?sid=<?php echo $row['0']?>"><?php echo $row['status']; ?></a></td>
	<td><?php echo $row['date']; ?></td>

	</tr>
<?php
$a++;
}
?>
</table>
</div>
   
<div id="footer">
          <div id="f1"><center>
		    <h3>STAY CONNECTED</h3>
			<h4>Join Over 10,5000 pepople</br>
			who receive bil-weekly web markething tips.</h4>
			</br></br>
			<input type="text" placeholder="Email-Address"style="width:200px; height:25px; border-radius:5px;text-align:center">
			<input type="submit" value="sin-up" style="width:80px;color:white;background-color:#008080; height:25px;border-radius:5px;"></br> </br>
			<div class="ap"><img src="../images/f.png" width="50px" height="50px" style="border-radius:100%"></div>
			<div class="ap"><img src="../images/t.png" width="50px" height="50px" style="border-radius:100%"></div>
			<div class="ap"><img src="../images/g.png" width="50px" height="50px" style="border-radius:100%"></div>
			<div class="ap"><img src="../images/i.png" width="50px" height="50px" style="border-radius:100%"></div>
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