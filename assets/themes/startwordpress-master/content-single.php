<div class="blog-post">
	<?php 
		$current_category = get_queried_object();

		if($current_category->post_type!="galeri"): 
	?>
		<h2 class="blog-post-title"><?php the_title(); ?></h2>
		<!--<p class="blog-post-meta"><?php //the_date(); ?> by <a href="#"><?php //the_author(); ?></a></p>-->
		<?php if ( has_post_thumbnail() ) {
			//the_post_thumbnail();
		} ?>
		<?php the_content(); ?>

	<?php else: ?>

		<h2> <?php the_title(); ?> </h2>
		<?php the_post_thumbnail(); ?>
		<br/>
		<br/>
		<?php the_content(); ?>

	<?php endif; ?>
</div><!-- /.blog-post -->