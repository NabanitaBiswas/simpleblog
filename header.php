<?php 
include_once ("resources/init.php");
session_start();	
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>First blog by me</title>
<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans:400,300,700|Yesteryear" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="menu-wrapper">
	<div id="menu">
		<ul>
			<li><a href = "index.php">Home</a></li>
			<li><a href = "category_list.php">Category list</a></li>
			
		<?php if(isset($_SESSION['username'])) { ?>	
			<li><a href = "add_post.php">Add a post</a></li>
			<li><a href = "add_category.php">Add a category</a></li>
			<li><a href = "logout.php">Log out</a></li>
		<?php } else {
		echo '<li><a href = "login.php">Log in</a></li>';
		echo '<li><a href = "register.php">Register</a></li>';
		} ?>	
		</ul>
	</div>
	</div>
	
	<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a>Coder's Blog</h1>
		</div>
	</div>
</div>

<div id="page">
	<div id="page-bgtop">
		<div id="page-bgbtm">
			<div id="content">
			