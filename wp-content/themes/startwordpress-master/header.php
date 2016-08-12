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
					</li>
					<li>
						Akademik
					</li>
					<li>
						Penerimaan
					</li>
					<li>
						Profil
					</li>
				</ul>
			</div>
		</div>
	</header>

	<div class="container">
