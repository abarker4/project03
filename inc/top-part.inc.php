<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $pageTitle ?></title>
	<link rel="stylesheet" href="css/styles.css">

	<!--this doesn't work-->
	<?php if ($pageTitle == 'Contact Form') 
	{
		echo '<script src="js/validate.js"></script>';
	}
	?> 
	
</head>
<body>
<div class="container">

	<header>
		<h1><?php echo $pageTitle ?></a></h1>
	</header>