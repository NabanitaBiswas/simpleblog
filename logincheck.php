<?php
require_once('header.php');

if(isset($_POST['submit'])){
	$uname = mysql_escape_string($_POST['uname']);
	$pass  = mysql_escape_string($_POST['pass']);
	$pass  = md5($pass);
	
	$sql = mysql_query("SELECT * FROM `users` WHERE `uname` = '$uname' AND `pass` = '$pass'");
	if(mysql_num_rows($sql)>0){
		echo "You are now logged in!";
		session_start();
		$_SESSION['username']= $uname;
		
		if(isset($_POST["rememberme"])){
		
			setcookie ('username',$username,time()+3600);
		
		}

		header("Location: index.php");
	}else{
		echo "Wrong Username/Password.";
		require_once('login.php');
	}
	
	
}