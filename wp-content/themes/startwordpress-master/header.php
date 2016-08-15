<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>
		<?php wp_title( '|', true, 'right' ); ?>
	</title>

	<?php wp_head();?>
</head>

<body>

	<header>
		<div class="row search-pane">
			<div class="col-md-2 pull-right">
				<input type="text" name="search" placeholder="Pencarian" class="form-control"  />
			</div>
			<div class="col-md-2 pull-right ikon">
				<a href="<?php echo get_option('facebook'); ?>"> <span class="dicon-fb"></span></a>
				<a href="<?php echo get_option('twitter'); ?>"> <span class="dicon-tw"></span></a>
				<a href="<?php echo get_option('youtube'); ?>"> <span class="dicon-yu"></span></a>
				<a href="<?php echo get_option('instagram'); ?>"> <span class="dicon-in"></span></a>
			</div>
		</div>
		<div class="row slider-pane">
			<ul>
				<li>
					<img src="<?php echo get_template_directory_uri() ?>/img/1.jpg" />
					<div class="sliderlabel"> <?php echo get_option('tagline'); ?></div>
				</li>
			</ul>
		</div>
		<div class="row menus">
			<div class="container">
				<a href="<?php echo get_site_url(); ?>">
					<img src="<?php echo get_site_url(); ?>/logo.png" class="col-md-2 col-xs-4 logo" />
				</a>
				<div class="col-md-2 col-xs-5 judul">
					<span>SMA</span>
					<span>PASUNDAN 3</span>
					<span>BANDUNG</span>
				</div>
				<ul class="col-md-8 mmenu navbar-collapse collapse">
					<li>
						<a href="<?php echo get_site_url(); ?>/menu/kontak">Kontak</a>
					</li>
					<li>
						<a href="">Galeri</a>
					</li>
					<li>
						<a href="">Berita</a>
					</li>
					<li>
						Kehidupan Siswa
						<div class="submenu">
							<div class="kiri">
								<a href="<?php echo get_site_url(); ?>/menu/organisasi-siswa-intra-sekolah">Organisasi Siswa Intra Sekolah</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
								<a href="<?php echo get_site_url(); ?>/menu/buku-pedoman-siswa-orang-tua">Buku Pedoman Siswa &amp; Orang Tua</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
							</div>
							<div class="tengah">
								<center>
									<img src="<?php echo get_template_directory_uri() ?>/img/image4.jpeg" />
									<a href="<?php echo get_site_url(); ?>/menu/kehidupan-siswa-di-sekolah">Kehidupan Siswa di Sekolah</a>
								</center>
							</div>
							<div class="kanan">
								<a href="<?php echo get_site_url(); ?>/menu/kalender-akademik">Kalender Akademik</a>
								<a href="<?php echo get_site_url(); ?>/menu/kegiatan-rutin-harian">Kegiatan Rutin Harian</a>
								<a href="<?php echo get_site_url(); ?>/menu/seragam">Seragam</a>
								<a href="<?php echo get_site_url(); ?>/menu/ekstrakurikuler">Ekstrakurikuler</a>
								<a href="<?php echo get_site_url(); ?>/menu/kepemimpinan">Kepemimpinan</a>
								<a href="<?php echo get_site_url(); ?>/menu/kesehatan-dan-keamanan">Kesehatan dan Keamanan</a>
							</div>
						</div>
					</li>
					<li>
						Akademik
						<div class="submenu">
							<div class="kiri">
								<a href="<?php echo get_site_url(); ?>/menu/pembelajaran-abad-21">Pembelajaran Abad 21</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
								<a href="<?php echo get_site_url(); ?>/menu/sistem-penilaian-terintegrasi">Sistem Penilaian Terintegrasi</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
							</div>
							<div class="tengah">
								<center>
									<img src="<?php echo get_template_directory_uri() ?>/img/image3.jpeg" />
									<a href="<?php echo get_site_url(); ?>/menu/sistem-akademik">Sistem Akademik</a>
								</center>
							</div>
							<div class="kanan">
								<a href="<?php echo get_site_url(); ?>/menu/kurikulum">Kurikulum</a>
								<a href="<?php echo get_site_url(); ?>/menu/sistem-pembelajaran">Sistem Pembelajaran</a>
								<a href="<?php echo get_site_url(); ?>/menu/sistem-penilaian">Sistem Penilaian</a>
								<a href="<?php echo get_site_url(); ?>/menu/peminatan">Peminatan</a>
								<a href="<?php echo get_site_url(); ?>/menu/perpustakaan">Perpustakaan</a>
								<a href="<?php echo get_site_url(); ?>/menu/teknologi-pembelajaran">Teknologi Pembelajaran</a>
							</div>
						</div>
					</li>
					<li>
						Penerimaan
						<div class="submenu">
							<div class="kiri">
								<a href="<?php echo get_site_url(); ?>/menu/mengapa-sma-pasundan-3-bandung">Mengapa SMA Pasundan 3 Bandung ?</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
								<a href="<?php echo get_site_url(); ?>/menu/buku-pedoman-pendaftaran">Buku Pedoman Pendaftaran</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
							</div>
							<div class="tengah">
								<center>
									<img src="<?php echo get_template_directory_uri() ?>/img/image2.jpeg" />
									<a href="<?php echo get_site_url(); ?>/menu/penerimaan-siswa-baru">Penerimaan Siswa Baru</a>
								</center>
							</div>
							<div class="kanan">
								<a href="<?php echo get_site_url(); ?>/menu/pendaftaran-2016">Pendaftaran 2016</a>
								<a href="<?php echo get_site_url(); ?>/menu/prosedur-pendaftaran">Prosedur Pendaftaran</a>
								<a href="<?php echo get_site_url(); ?>/menu/upload-persyaratan">Upload Persyaratan</a>
								<a href="<?php echo get_site_url(); ?>/menu/campus-tour" style="font-style:italic">Campus Tour</a>
								<a href="<?php echo get_site_url(); ?>/menu/bantuan-keuangan">Bantuan Keuangan</a>
								<a href="<?php echo get_site_url(); ?>/menu/pertanyaan-sering-ditanyakan">Pertanyaan Sering Ditanyakan</a>
							</div>
						</div>
					</li>
					<li>
						Profil
						<div class="submenu">
							<div class="kiri">
								<a href="<?php echo get_site_url(); ?>/menu/jelajahi-profil-buku-sekolah">Jelajahi Profil Buku Sekolah</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
								<a href="<?php echo get_site_url(); ?>/menu/potret-dari-lulusan">Potret dari Lulusan</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
							</div>
							<div class="tengah">
								<center>
									<img src="<?php echo get_template_directory_uri() ?>/img/image1.jpeg" />
									<a href="<?php echo get_site_url(); ?>/menu/profil-sma-pasundan-3-bandung">Profil SMA Pasundan 3 Bandung</a>
								</center>
							</div>
							<div class="kanan">
								<a href="<?php echo get_site_url(); ?>/menu/sambutan">Sambutan</a>
								<a href="<?php echo get_site_url(); ?>/menu/sejarah">Sejarah</a>
								<a href="<?php echo get_site_url(); ?>/menu/visi-misi-dan-filosopi">Visi, Misi, dan Filosopi</a>
								<a href="<?php echo get_site_url(); ?>/menu/guru-dan-tenaga-kependidikan">Guru dan Tenaga Kependidikan</a>
								<a href="<?php echo get_site_url(); ?>/menu/rencana-strategis">Rencana Strategis</a>
								<a href="<?php echo get_site_url(); ?>/menu/fasilitas">Fasilitas</a>
								<a href="<?php echo get_site_url(); ?>/menu/petunjuk-ke-sekolah">Petunjuk Ke Sekolah</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<div class="container">
