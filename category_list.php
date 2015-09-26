<?php    require_once('header.php');?>

				<div class="post">
	<h1>Category List</h1>	</br>

	<?php 
		foreach( get_categories() as $category) {
			
			?>
			<p>
				<a href = "category.php?id=<?php echo $category['id']; ?> "> <?php echo $category['name']; ?> </a>
				
			</p>
		<?php 
		
		}
	?>
	</div>
	</div>
	</div>
	</div>
	</div>
<?php   require_once('footer.php'); ?>