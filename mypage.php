<html>
<head>
	<meta charset="utf-8">
	<title></title>
	
	<link href="style.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	<h1>Hey guys! welcome to Housebook!</h1>

	
	<a href="signup.html">Sign up for a new account!</a>
	<?php
	$con = mysql_connect("localhost","root","root");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	mysql_select_db("HouseBook", $con);
	
	$sql="INSERT INTO User (username, password, Address)
	VALUES
	('$_POST[username]','$_POST[password]','$_POST[address]')";
	
	if (!mysql_query($sql,$con))
	  {
	  //die('Error: ' . mysql_error());
	  }
	echo "1 user record added";
	
	mysql_close($con)
	?>
	
	<br>
	<a href="viewComplex.php">View all existing complexes</a>


	


	
	
</body>
</html>



