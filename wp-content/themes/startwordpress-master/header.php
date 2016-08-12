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
		</div>
		<div class="row slider-pane">
			<ul>
				<li>
					<img src="<?php echo get_template_directory_uri() ?>/img/1.jpg" />
					<div class="sliderlabel">Pengkuh Agamana, Luhung Elmuna, Jembar Budayana, Parigel Kabisana</div>
				</li>
			</ul>
		</div>
		<div class="row menus">
			<div class="container">
				<img src="logo.png" class="col-md-2 logo" />
				<div class="col-md-2 judul">
					<span>SMA</span>
					<span>PASUNDAN 3</span>
					<span>BANDUNG</span>
				</div>
				<ul class="col-md-8 mmenu">
					<li>
						Kontak
					</li>
					<li>
						Galeri
					</li>
					<li>
						Berita
					</li>
					<li>
						Kehidupan Siswa
						<div class="submenu">
							<div class="kiri">
								<a href="">Organisasi Siswa Intra Sekolah</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
								<a href="">Buku Pedoman Siswa &amp; Orang Tua</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
							</div>
							<div class="tengah">
								<center>
									<img src="<?php echo get_template_directory_uri() ?>/img/image4.jpeg" />
									<a href="">Kehidupan Siswa di Sekolah</a>
								</center>
							</div>
							<div class="kanan">
								<a href="">Kalender Akademik</a>
								<a href="">Kegiatan Rutin Harian</a>
								<a href="">Seragam</a>
								<a href="">Ekstrakurikuler</a>
								<a href="">Kepemimpinan</a>
								<a href="">Kesehatan dan Keamanan</a>
							</div>
						</div>
					</li>
					<li>
						Akademik
						<div class="submenu">
							<div class="kiri">
								<a href="">Pembelajaran Abad 21</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
								<a href="">Sistem Penilaian Terintegrasi</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
							</div>
							<div class="tengah">
								<center>
									<img src="<?php echo get_template_directory_uri() ?>/img/image3.jpeg" />
									<a href="">Sistem Akademik</a>
								</center>
							</div>
							<div class="kanan">
								<a href="">Kurikulum</a>
								<a href="">Sistem Pembelajaran</a>
								<a href="">Sistem Penilaian</a>
								<a href="">Peminatan</a>
								<a href="">Perpustakaan</a>
								<a href="">Teknologi Pembelajaran</a>
							</div>
						</div>
					</li>
					<li>
						Penerimaan
						<div class="submenu">
							<div class="kiri">
								<a href="">Mengapa SMA Pasundan 3 Bandung ?</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
								<a href="">Buku Pedoman Pendaftaran</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
							</div>
							<div class="tengah">
								<center>
									<img src="<?php echo get_template_directory_uri() ?>/img/image2.jpeg" />
									<a href="">Penerimaan Siswa Baru</a>
								</center>
							</div>
							<div class="kanan">
								<a href="">Pendaftaran 2016</a>
								<a href="">Prosedur Pendaftaran</a>
								<a href="">Upload Persyaratan</a>
								<a href="" style="font-style:italic">Campur Tour</a>
								<a href="">Bantuan Keuangan</a>
								<a href="">Pertanyaan Sering Ditanyakan</a>
							</div>
						</div>
					</li>
					<li>
						Profil
						<div class="submenu">
							<div class="kiri">
								<a href="">Jelajahi Profil Buku Sekolah</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
								<a href="">Potret dari Lulusan</a>
								<p>There many variations of passages of lOrem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
							</div>
							<div class="tengah">
								<center>
									<img src="<?php echo get_template_directory_uri() ?>/img/image1.jpeg" />
									<a href="">Profil SMA Pasundan 3 Bandung</a>
								</center>
							</div>
							<div class="kanan">
								<a href="">Sambutan</a>
								<a href="">Sejarah</a>
								<a href="">Visi, Misi, dan Filosopi</a>
								<a href="">Guru dan Tenaga Kependidikan</a>
								<a href="">Rencana Strategis</a>
								<a href="">Fasilitas</a>
								<a href="">Petunjuk Ke Sekolah</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<div class="container">
