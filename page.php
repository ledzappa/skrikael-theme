<?php
get_header(); //<body>
?>
<div class="col-md-6 col-sm-8 col-xs-11" id="content">
<?php
if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<?php endwhile;
	
	else : 
		echo '<p>No content found</p>';
		
	endif;
	?>
	
</div>

<?php
get_footer(); //</body>	
	
?>