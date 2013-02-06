<html>
<head>
<title><?php echo $title;?></title>
</head>
<body>
<h1><?php echo $heading;?></h1>

<h3>Residences in your city!</h3>

<ul>
<?php foreach ($res_list as $item):?>

<li><?php echo $item;?></li>

<?php endforeach;?>
</ul>

</body>
</html>
