<div id="sidebar">
	<ul>
			<li>

				<h2>Like Us</h2>
				
				<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=193869374063299";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="fb-like" data-href="http://php-nabanitacste.c9.io" data-width="180" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>

				<div style="clear: both;">&nbsp;</div>
			</li>
						
		<li>
			<h2>Categories</h2>
	<ul>
	<?php 
		foreach( get_categories() as $category) {
			
			?>
		
				<li>
				<a href = "category.php?id=<?php echo $category['id']; ?> "> <?php echo $category['name']; ?> </a>
				
			    </li>
		<?php 
		
		}
	?>

</div>  <!-- sidebar div ends here. -->
</div>  <!-- div pagebg-top ends here. -->
</div>  <!-- div page ends here. -->
