<?php
include_once ("resources/init.php");
session_start();
session_unset();
setcookie('username',"");
session_destroy();
header("Location:index.php");






?>