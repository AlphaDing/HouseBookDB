  <h4>Singles in Terre Haute! (oops, I meant complexes)</h4>
	<a href="newComplex.html">Add a new Complex</a>
	<?php
	$con = mysql_connect("localhost","root","root");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	mysql_select_db("HouseBook", $con);
	
	$sql="INSERT INTO Complex (name, description, address)
	VALUES
	('$_POST[name]','$_POST[description]','$_POST[address]')";
	
	if (!mysql_query($sql,$con))
	  {
	  //die('Error: ' . mysql_error());
	  //TODO: still need to figure out why form repeats sending data to php
	  }
	echo "1 complex record added";
	
	mysql_close($con)
	?>
	
	
	
	<?php
	$con = mysql_connect("localhost","root","root");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	mysql_select_db("HouseBook", $con);
	
	$result = mysql_query("SELECT * FROM Complex");
	
	while($row = mysql_fetch_array($result))
	  {
	  echo $row['name'] . " " . $row['description']." ".$row['address'];
	  echo "<br />";
	  }
	
	mysql_close($con);
	?>
	