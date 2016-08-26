<?php get_header(); ?>
	<div class="row bariskahiji">		
		<div class="col-md-7">
			<?php 
				$about = get_page_by_title('Tentang Kami', OBJECT, 'menu');
				// print_r($about);
			?>
			<h4><?php echo $about->post_title ?></h4>
			<p><?php 
				$ext = get_extended( $about->post_content );
				echo $ext['main'];
			?></p>
			<span class="nextright"> <a href="<?php echo get_post_permalink($about->ID) ?>">Selengkapnya &nbsp; &gt;&gt; </a></span>
		</div>
		<div class="col-md-5 text-center">
			<iframe
			src="<?php echo get_option('video'); ?>">
			</iframe>
			<span><?php echo get_option('video_title'); ?></span>
		</div>
	</div> 	<!-- /.row -->

	<div class="row bariskadua">
		<h4>Apa kata mereka ?</h4>
		<?php 
			$testimoni = wp_get_recent_posts( array(
					'numberposts' => 10,
    				'offset' => 0,
    				'post_type' => 'testimoni'
				), OBJECT);
		?>
		<ul class="slideshow">
			<?php foreach($testimoni as $te=>$ti){ ?>
			<li>
				<img src="<?php 
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id($ti->ID) );
					echo $feat_image;
				 ?>" />
				<span class="papatah">"<?php echo $ti->post_content ?>"</span>
				<span class="nunulis"><?php echo $ti->post_title ?></span>
			</li>
			<?php } ?>
		</ul>
	</div>

	<div class="row bariskatilu">
		<div class="col-md-6 jarak">
			<h4>Kegiatan</h4>
			<?php 
				$args = array(
				    'posts_per_page' => -1,
				    'post_type' => 'kegiatan',
				    'post_status' => 'draft, publish, future, pending, private',
				    'date_query' => array(
				        'after' => date('Y-m-d') 
				    ),
				    'suppress_filters' => false
				); 
				$kegiatan = get_posts($args);
				// print_r($kegiatan);
			?>
			<ul class="kagiatan">
				<?php foreach($kegiatan as $cu=>$qu){ ?>
				<li>
					<div class="waktos"><?php echo $qu->post_date ?></div>
					<span class="nami"> <a href="<?php echo get_post_permalink($qu->ID) ?>"><?php echo $qu->post_title ?></a></span> 
					<span class="kagiatan"><?php 
						$kext = get_extended( $qu->post_content );
						echo $kext['main'];
					?></span> 
				</li>
				<?php } ?>
			</ul>
			<span class="nextright"> <a href=""> Selengkapnya &nbsp; &gt;&gt; </a></span>
		</div>
		<div class="col-md-6 backbiru">
			<div class="col-md-12">
				<h4>Berita Terkini</h4>
				<?php 
					$berita = wp_get_recent_posts( array(
							'numberposts' => 3,
		    				'offset' => 0,
		    				'post_type' => 'berita'
						), OBJECT);
					if(count($berita) > 0) {
				?>
				<div class="headline">
					<img src="<?php 
						$bimage = wp_get_attachment_url( get_post_thumbnail_id($berita[0]->ID) );
						echo $bimage;
					 ?>" />
					<span class="judulna"> <a href="<?php echo get_post_permalink($berita[0]->ID) ?>"><?php echo $berita[0]->post_title ?></a></span>
					<span class="beritana"><?php 
						$bext = get_extended( $berita[0]->post_content );
						echo $bext['main'];
					?></span>
				</div>
				<ul class="utama">
					<?php foreach($berita as $be=>$ri){ ?>
					<li> <span class="dicon4"></span> <a href="<?php echo get_post_permalink($ri->ID) ?>"><?php echo $ri->post_title ?></a> </li>
					<?php } ?>
				</ul>
				<span class="nextright"> <a href=""> Selengkapnya &nbsp; &gt;&gt; </a></span>

				<?php } ?>
			</div>
			<div class="col-md-12">
				<h4>Galeri</h4>
				<?php 
					$galeri = wp_get_recent_posts( array(
							'numberposts' => 3,
		    				'offset' => 0,
		    				'post_type' => 'galeri'
						), OBJECT);
					if(count($galeri) > 0) {
				?>
				<ul class="potopoto">
					<?php foreach($galeri as $ga=>$le){ ?>
					<li>
						<a title="<?php echo $le->post_title ?>" href="<?php echo get_post_permalink($le->ID) ?>">
							<img src="<?php 
								$galeri_image = wp_get_attachment_url( get_post_thumbnail_id($le->ID) );
								echo $galeri_image;
							 ?>" />
						</a>
					</li>
					<?php } ?>
				</ul>
				<span class="nextright"> <a href=""> Selengkapnya &nbsp; &gt;&gt; </a></span>
				<?php } ?>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		(function($) {
			var co = $('.slideshow').find('li').length;
			var st = 0;

			var slideshow = function(){
				if(st<co-1)
					st++;
				else
					st = 0;
				$('.slideshow').find('li').slideUp('slow', function(){
					$('.slideshow').find('li').eq(st).slideDown('slow');
				});
				setTimeout(slideshow, 3000);
			}

			slideshow();
		})(jQuery);
	</script>
<?php get_footer(); ?>
