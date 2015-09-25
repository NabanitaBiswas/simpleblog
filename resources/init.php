<?php 

	include_once('config.php');
	
	mysql_connect(DB_HOST, DB_USER, DB_PASS); //connect with localhost,root and password.
	mysql_select_db(DB_NAME); 				 //setup connection to the database.
	
	include_once('func/blog.php');			 //

?>