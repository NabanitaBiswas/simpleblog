
<?php 
include_once ("resources/init.php");

	if(isset($_POST['title'],$_POST['contents'] , $_POST['category'])){
		$title = trim($_POST['title']);
		$contents = trim($_POST['contents']);
		
		if(empty($title)){
			$errors[] = "you need to supply a title.";
		}else if(strlen($title)>255){
			$errors[] = "The title cannot be longer than 255 characters.";
		}
		
		if(empty($contents)){
			$errors[] = "you need to supply some text.";
		}
		
		if(!category_exists('id' , $_POST['category'])){
			$errors[] = "That category does not exist.";
		}
		
		if(empty($errors)){
			add_post($title,$contents,$_POST['category']);
			
			$id = mysql_insert_id();
			
			header("Location: index.php?id = {$id}");
			die();
		}
		
	}
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Forthright by FCT</title>
<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans:400,300,700|Yesteryear" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="menu-wrapper">
	<div id="menu">
		<ul>
			<li><a href = "index.php">Home</a></li>
			<li><a href = "add_post.php">Add a post</a></li>
			<li><a href = "add_category.php">Add a category</a></li>
			<li><a href = "category_list.php">Category list</a></li>
		</ul>
	</div>
	</div>
	
<div id="page">
	<div id="page-bgtop">
		<div id="page-bgbtm">
			<div id="content">
					<h2 class="title"><a href="#">Welcome to coder's blog</a></h2>
				<div class="post">
				
				
						<h1>Add a Post</h1>
							<?php 
								if(isset($errors) && !empty($errors)){
									echo "<ul><li>" , implode("</li><li>" , $errors) , "</li></ul>";
								}
							?>
	
	
							<form action = "" method = "post">
							<div>
								<label for = "title">Title</label>
								<input type = "text" name = "title" value = "<?php if (isset($_POST['title'])) echo $_POST['title']; ?>">
							</div></br></br>
							<div>
								<label for = "contents">contents</label>
								<textarea name = "contents" row = "30" cols = "50"> <?php if (isset($_POST['contents'])) echo $_POST['contents']; ?> </textarea>
							</div></br></br>
						<div>
								<label for = "category">Category</label>
								<select name = "category">
							<?php 
								foreach(get_categories() as $category){
							?>
								<option value = "<?php echo $category['id']; ?>"> <?php echo $category['name']; ?> </option>
							<?php 
								}	
							?>
								</select>
						</div>
	
								<div><input type= "submit" name = "submit" value = "Add Post"></div>
						</form>
				</div>
			</div>
		</div>
	</div>  <!-- div pagebg-top ends here. -->
</div><!-- div page ends here. -->
	
<div id="footer">  <!-- Footer div start s here. -->
	<p>&copy; 2015 dreamblog.com. | Design by <a href="nabanita/" rel="nofollow">dreamblog.org</a>.</p>
</div>   <!-- Footer div ends here. -->

</body>


</html>