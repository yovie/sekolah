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
			<div class="col-md-12 text-right">
				<?php get_search_form() ?>
			</div>
		</div>
		<div class="row slider-pane">
			<ul>
				<li>
					<img src="<?php echo get_template_directory_uri() ?>/img/1.jpg" />
					<div class="label">Pengkuh Agamana, Luhung Elmuna, Jembar Budayana, Parigel Kabisana</div>
				</li>
			</ul>
		</div>
	</header>

	<div class="container">
