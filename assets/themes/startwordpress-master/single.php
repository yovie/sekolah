<?php get_header(); ?>
	<div class="row">
		<div class="col-sm-9" style="padding-top:20px;padding-bottom:20px;">
			<?php 
				$current_category = get_queried_object();
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile; endif; 
			?>
		</div> <!-- /.col -->

		<div class="col-sm-3" style="padding-top:30px;padding-bottom:20px;padding-left:0;padding-right:0;">
			<ul class="sidemenu">
			<?php 
				$menu1 = array(
					'sambutan'=>'Sambutan',
					'sejarah'=>'Sejarah',
					'visi-misi-dan-filosopi'=>'Visi, Misi dan Filosopi',
					'guru-dan-tenaga-kependidikan'=>'Guru dan Tenaga Kependidikan',
					'rencana-strategis'=>'Rencana Strategis',
					'fasilitas'=>'Fasilitas',
					'petunjuk-ke-sekolah'=>'Petunjuk ke Sekolah'
				);
				$menu2 = array(
					'pendaftaran'=>'Pendaftaran',
					'prosedur-pendaftaran'=>'Prosedur Pendaftaran',
					'upload-persyaratan'=>'Upload Persyaratan',
					'campus-tour'=>'<i>Campus Tour</i>',
					'bantuan-keuangan'=>'Bantuan Keuangan',
					'pertanyaan-sering-ditanyakan'=>'Pertanyaan Sering Ditanyakan'
				);
				$menu3 = array(
					'kurikulum'=>'Kurikulum',
					'sistem-pembelajaran'=>'Sistem Pembelajaran',
					'sistem-penilaian'=>'Sistem Penilaian',
					'peminatan'=>'Peminatan',
					'perpustakaan'=>'Perpustakaan',
					'teknologi-pembelajaran'=>'Teknologi Pembelajaran'
				);
				$menu4 = array(
					'kalender-akademik'=>'Kalender Akademik',
					'kegiatan-rutin-harian'=>'Kegiatan Rutin Harian',
					'seragam'=>'Seragam',
					'ekstrakurikuler'=>'Ekstrakurikuler',
					'kepemimpinan'=>'Kepemimpinan',
					'kesehatan-dan-keamanan'=>'Kesehatan dan Keamanan'
				);
				if($current_category->post_type=="menu"): 
					$tmps = isset($menu1[$current_category->post_name]) ? $menu1: array();
					$tmps = isset($menu2[$current_category->post_name]) && empty($tmps) ? $menu2: $tmps;
					$tmps = isset($menu3[$current_category->post_name]) && empty($tmps) ? $menu3: $tmps;
					$tmps = isset($menu4[$current_category->post_name]) && empty($tmps) ? $menu4: $tmps;
			?>
				<li>
					<label>Jelajahi Menu Ini</label>
				</li>
				<?php if(empty($tmps)): ?>
				<li>
					<a class="active" href="<?php echo get_site_url().'/menu/'.$current_category->post_name; ?>"> <?php echo $current_category->post_title ?> </a>
				</li>
				<?php endif; ?>

				<?php foreach($tmps as $tm=>$ps): ?>
				<li>
					<a class="<?php echo $current_category->post_name==$tm ? "active":"" ?>" href="<?php echo get_site_url().'/menu/'.$tm; ?>"> <?php echo $ps ?> </a>
				</li>
				<?php endforeach; ?>

			<?php else: ?>

				<?php 
					$sidem = new WP_Query(array(
					    'post__not_in' => array($current_category->ID),
					    'post_type' => $current_category->post_type,
					    'numberposts' => 4
					));
				?>

			<ul class="sidemenu">
				<li>
					<label><?php echo ucfirst($current_category->post_type) ?></label>
				</li>
				<?php foreach($sidem->posts as $si=>$de): ?>
					<li>
						<a href="<?php echo get_post_permalink($de->ID) ?>"><?php echo $de->post_title ?></a>
					</li>
				<?php endforeach; ?>
			</ul>

			<?php endif; ?>
			</ul>
		</div>
	</div> <!-- /.row -->
<?php get_footer(); ?>


