<?php 
   require_once('header.php');
	
	$posts = get_posts(null,$_GET['id']);
?>

				<div class="post">
	

	<?php
	
		foreach($posts as $post){
			/*if(!category_exists('name' , $post['name'])){
				$post['name'] = 'Uncategorised';
			}*/
	?>

	<h2><a href = "index.php?id = <?php echo $post['post_id'];?>"><?php echo $post['title']; ?></a></h2>
	<p>Posted on <?php echo date('d-m-Y h:i:s' , strtotime($post['date_posted']));?>
	   in <a href = "category.php?id=<?php echo $post['category_id']; ?>"><?php echo $post['name'];?></a>
	</p>
	<div> <?php echo nl2br($post['contents']); ?> </div>
	
				<?php if(isset($_SESSION['username'])) { ?>			
							<menu>
								<ul>
									<li><a href = "delete_post.php?id=<?php echo $post['post_id']; ?>">Delete Post</a></li>
									<li><a href = "edit_post.php?id=<?php echo $post['post_id']; ?>">Edit Post</a></li>
								</ul>
							</menu>
				<?php } ?>	
	<?php
		}
	?>
	 
	</div>
	</div>
	</div>
	</div>
	</div> 
 <?php  require_once('header.php'); ?>