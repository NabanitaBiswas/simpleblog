<?php
session_start();
include_once("resources/init.php");

if (isset($_POST['submit'])) {
    
    
    $uname = $email1 = $email2 = $pass1 = $pass2 = "";
    
    if (empty($_POST["uname"])) {
        echo $nameErr = "Username is required<br>";
    } else {
        $uname = mysql_escape_string($_POST["uname"]);
    }
    
    
    if (empty($_POST["email1"])) {
        echo $nameErr = "Email is required<br>";
    } else {
        $email1 = mysql_escape_string($_POST["email1"]);
    }
    
    if (empty($_POST["email2"])) {
        echo $nameErr = "Confirmation Email is required<br>";
    } else {
        $email2 = mysql_escape_string($_POST["email2"]);
        
        if ($email1 != $email2) {
            echo $nameErr = "sorry,email's don't match.</br></br>";
        }
    }
    
    if (empty($_POST["pass1"])) {
        echo $nameErr = "Password is required<br>";
    } else {
        $pass1 = mysql_escape_string($_POST["pass1"]);
    }
    
    if (empty($_POST["pass2"])) {
        echo $nameErr = "Confirmation Password is required<br>";
    } else {
        $pass2 = mysql_escape_string($_POST["pass2"]);
        if ($pass1 != $pass2) {
            echo $nameErr = "sorry,password don't match.</br>";
        }
    }
    

    if (!$nameErr) {
        $sql = mysql_query("SELECT * FROM `users` WHERE `uname` = '$uname'");
        if (mysql_num_rows($sql) > 0) {
            echo "Sorry, that user already exists. <br>";
            require_once('register.php');
        } else {
            $pass1 = md5($pass1);
            mysql_query("INSERT INTO `users` (`id`,`uname`,`email`,`pass`) VALUES (NULL,'$uname','$email1','$pass1')");
            
            echo "Registered successfully";
            
        }
        
    } else {
         require_once('register.php');
    }
    
    
    
}