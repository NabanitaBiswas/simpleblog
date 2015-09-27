
<?php 
   require_once('header.php');
   
?>


    <h2 class="title"><a href="#">Register Here</a></h2><br>
    <form action = "action.php" method = "POST">
    
   <div>Username:</div> <input type = "text" name = "uname" /></br>
    <div>Email:</div> <input type = "email" name = "email1" /></br>
    <div>Confirm Email:</div> <input type = "email" name = "email2" /></br>
    <div>Password:</div> <input type = "password" name = "pass1" /></br>
    <div>Confirm Password:</div> <input type = "password" name = "pass2" /></br>
    <input type = "submit" value = "Register" name = "submit" />
    </form>