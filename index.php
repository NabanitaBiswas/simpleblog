<?php 
   require_once('header.php');

	$posts = get_posts(((isset($_GET['id'])) ? $_GET['id'] : null ));

							foreach($posts as $post){
							/*if(!category_exists('name' , $post['name'])){
							$post['name'] = 'Uncategorised';
							}*/
						?>
							<h2><a href = "index.php?id=<?php echo $post['post_id'];?>"><?php echo $post['title']; ?></a></h2>
							<p>Posted on <?php echo date('d-m-Y h:i:s' , strtotime($post['date_posted']));?>
							in <a href = "category.php?id=<?php echo $post['category_id']; ?>">&nbsp; <?php echo $post['name'];?></a></br>Posted by <a href="#">Nabanita Biswas</a>
							</p>
							<div> <?php echo nl2br($post['contents']); ?> </div>
				<?php if (!isset($_GET['id'])) { ?>			
							<p class="links"><a href="index.php?id=<?php echo $post['post_id'];?>" class="button">Read More</a></p><br><br>
				 <?php }			?>
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
		
	<!-- sidebar div start s here. -->
<?php		
   require_once('sidebar.php');
   require_once('footer.php');
?>