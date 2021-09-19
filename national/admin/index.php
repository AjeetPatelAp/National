<?php

?>
<html>
<head>
<link href="../css/adminlogin.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="outer">
<div id="aa" style="width:80px;height:30;border:2px solid white; border-radius:5px;background-color:#009393;"><a href="../index.php" style="text-decoration:none;color:white;text-align:center;line-height:30px;margin-left:20px">Goto</a></div>
<form action="logcode.php" method="post">
  <div id="mid">
     <img src="../images/adminlogo3.png" style="width:250px;height:250px; margin-left:140px;"></br>
	 <input type="email" name="email" placeholder="Enter your email" 
	 style="width:300px;height:40px;border-radius:5px;text-align:center;line-height:30px;margin-left:120px;margin-top:25px;"></br>
	 <input type="password" name="password" placeholder="Enter your password" 
	 style="width:300px;height:40px;border-radius:5px;text-align:center;line-height:30px;margin-left:120px;margin-top:25px;"></br>
	 <input type="submit" value="Login"  style="width:300px;height:35px;border-radius:5px;text-align:center;line-height:30px;margin-left:120px;margin-top:25px;">
  </div>
  </form>
</div>
</body>
</html>