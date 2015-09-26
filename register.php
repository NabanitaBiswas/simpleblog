<?php 
   require_once('header.php');
?>
		<h2 class="title"><a href="#">Register Here</a></h2><br>
  <form action = "action.php" method = "POST">
    
    Username: <input type = "text" name = "uname" /></br>
    Email: <input type = "email" name = "email1" /></br>
    Confirm Email: <input type = "email" name = "email2" /></br>
    Password: <input type = "password" name = "pass1" /></br>
    Confirm Password: <input type = "password" name = "pass2" /></br>
    <input type = "submit" value = "Register" name = "submit" />
    </form>