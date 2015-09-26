<?php 
   require_once('header.php');
if(isset($_SESSION['username'])) { 	
header("Location: index.php");
} else { ?>
<h2 class="title"><a href="#">Login</a></h2><br>
<form action = "logincheck.php" method = "POST">
Username: <input type ="text" name = "uname"/></br>
Password: <input type ="password" name = "pass" /></br>
<div class="checkbox">
            <label>
                <input name="remember_me" type="checkbox" value="1"> Remember me
            </label>
        </div>
<input type = "submit" name = "submit" value = "Log in" />
</form>
<?php 

} ?>
