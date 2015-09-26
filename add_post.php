
<?php 
   require_once('header.php');

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

<?php

if(isset($_SESSION['username'])) { ?>

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
	

<?php 
	   require_once('footer.php');
	
} else { 
header("Location: login.php");
 } ?>