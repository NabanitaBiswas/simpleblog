<?php 
   require_once('header.php');

	if (isset($_POST['name'])){ 		//checking this field is submitted.
		$name = trim($_POST['name']); 	//there is actually a input.
		
		if(empty($name)){				//
			$error = "you must submit a category name";
		}
		else if (category_exists('name' , $name)){
			$error = "That category already exists.";
		}
		else if(strlen($name)> 24){
			$error = "Category names can only be up to 24 character.";
		}
		if( !isset($error)){ 		//if no error can be found.
			add_category($name);
			header("Location:add_post.php");
			die();
		}
	}
?>

<?php
if(isset($_SESSION['username'])) { ?>

<title>Add a category</title>
</head>
<body>
	<h2 class="title"><a href="#">Add a category</a></h2><br>
	<?php 
	if( isset($error)){
		echo "<p> {$error} </p>\n";
	}
	?>
	<form action = "" method = "post">
	<div>
		<label for = "name">Name</label>
		<input type = "text" name = "name" value = "">
	</div>
	<div><input type= "submit" value = "Add Category"></div>
</form>
<?php } else { 
header("Location: login.php");
 } ?>