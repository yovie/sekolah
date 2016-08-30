<?php get_header(); ?>
	<div class="row">
		
		<div class="blog-post">

		<h2 class="blog-post-title"> Ditemukan <?php echo $wp_query->found_posts; ?> data, dengan kata kunci : "<?php the_search_query(); ?>" </h2>

        <?php if ( have_posts() ) { ?>

            <ul class="hasil-cari">

            <?php while ( have_posts() ) { the_post();
            	if(get_post_type()=="galeri")
            		continue;
             ?>

               <li>
                 <?php  the_post_thumbnail('medium') ?>
                 <h3> <span class="dicon-file"></span> <a href="<?php echo get_permalink(); ?>">
                   <?php the_title(); ?>
                 </a></h3>
                 <?php echo substr(get_the_excerpt(), 0,200); ?>
                 <div class="h-readmore"> <a href="<?php the_permalink(); ?>">Read More</a></div>
               </li>

            <?php } ?>

            </ul>

           <?php echo paginate_links(); ?>

        <?php } ?>

        </div>


	</div> <!-- /.row -->
<?php get_footer(); ?>


