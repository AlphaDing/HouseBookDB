<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title;?></title>
	
	<link href="style.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	<h1><?php echo $heading;?></h1>
	<h3>Check out all the residences in your local area!</h3>
<?php foreach ($res_list as $item);?>
	<li>
		<?php echo $item;?>
		
	</li>
<?php endforeach;?>
</ul>
	
	
	
</body>
</html>