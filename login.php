<?php 
include_once ("resources/init.php");

if(isset($_POST['submit'])){
	$uname = mysql_escape_string($_POST['uname']);
	$pass  = mysql_escape_string($_POST['pass']);
	$pass  = md5($pass);
	
	$sql = mysql_query("SELECT * FROM `users` WHERE `uname` = '$uname' AND `pass` = '$pass'");
	if(mysql_num_rows($sql)>0){
		echo "You are now logged in!";
		exit();
	}else{
		echo "Wrong Username/Password.";
	}
	
	
}else{
$form = <<<EOT
<form action = "login.php" method = "POST">
Username: <input type ="text" name = "uname"/></br>
Password: <input type ="password" name = "pass" /></br>
<div class="checkbox">
            <label>
                <input name="remember_me" type="checkbox" value="1"> Remember me
            </label>
        </div>
<input type = "submit" name = "submit" value = "Log in" />
</form>
EOT;
}
echo $form;

?>