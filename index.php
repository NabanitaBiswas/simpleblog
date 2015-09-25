<?php 
	include_once ("resources/init.php");
	//$posts = (isset($_GET['id'])) ? get_posts($_GET['id']): get_posts();
	$posts = get_posts(((isset($_GET['id'])) ? $_GET['id'] : null ));
	//$posts = get_posts();
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>First blog by me</title>
<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans:400,300,700|Yesteryear" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="menu-wrapper">
	<div id="menu">
		<ul>
			<li><a href = "index.php">Home</a></li>
			<li><a href = "add_post.php">Add a post</a></li>
			
			<li><a href = "category_list.php">Category list</a></li>
			<li><a href = "login.php">Log in</a></li>
			
		</ul>
	</div>
	</div>
	
	<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Coder's Blog</h1>
		</div>
	</div>
</div>

<div id="page">
	<div id="page-bgtop">
		<div id="page-bgbtm">
			<div id="content">
					<h2 class="title"><a href="#">Welcome to coder's blog</a></h2>
				<div class="post">
					
						<?php
	
							foreach($posts as $post){
							/*if(!category_exists('name' , $post['name'])){
							$post['name'] = 'Uncategorised';
							}*/
						?>
							<h2><a href = "index.php?id = <?php echo $post['post_id'];?>"><?php echo $post['title']; ?></a></h2>
							<p>Posted on <?php echo date('d-m-Y h:i:s' , strtotime($post['date_posted']));?>
							in <a href = "category.php?id=<?php echo $post['category_id']; ?>">&nbsp; <?php echo $post['name'];?></a></br>Posted by <a href="#">Nabanita Biswas</a>
							</p>
							<div> <?php echo nl2br($post['contents']); ?> </div>
							
							<p class="links"><a href="read_more.php" class="button">Read More</a></p>
	
							<menu>
								<ul>
									<li><a href = "delete_post.php?id=<?php echo $post['post_id']; ?>">Delete Post</a></li>
									<li><a href = "edit_post.php?id=<?php echo $post['post_id']; ?>">Edit Post</a></li>
								</ul>
							</menu>
						<?php 
						}
						?>
				</div>
			</div>
		</div>
		
	<!-- sidebar div start s here. -->
		
<div id="sidebar">
	<ul>
			<li>
				<h2>Search Here</h2>
				<div id="search" >
						<form method="get" action="#">
						<div>
							<input type="text" name="s" id="search-text" value="" />
							<input type="submit" id="search-submit" value="" />
						</div>
					</form>
				</div>
				<div style="clear: both;">&nbsp;</div>
			</li>
						
		<li>
			<h2>Categories</h2>
			<ul>
				<li><a href="#">PHP Tutorial</a></li>
				<li><a href="#">Html Tutorial</a></li>
				<li><a href="#">Bootstarp Tutorial</a></li>
				<li><a href="#">XML Tutorial</a></li>
				<li><a href="#">CSS Tutorial</a></li>
				
			</ul>
		</li>
						
	</ul>
</div>  <!-- sidebar div ends here. -->
</div>  <!-- div pagebg-top ends here. -->
</div>  <!-- div page ends here. -->


<div id="footer">  <!-- Footer div start s here. -->
	<p>&copy; 2015 dreamblog.com. | Design by <a href="nabanita/" rel="nofollow">dreamblog.org</a>.</p>
</div>   <!-- Footer div ends here. -->	
</body>
</html>