<?php echo required_js_css() ?>

<script type="text/javascript">
	(function($){

		$(".table-data").DataTable();

	})(jQuery);
</script>



<div class="col-md-12">

	<h3>Daftar page menu</h3>

	<table class="table table-bordered table-data">
		<thead>
			<tr>
				<th width="10px">No</th>
				<th>Judul</th>
				<th width="50px">Aksi</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>

	<button class="btn btn-primary"> <span class="fa fa-plus"></span> Tambah page menu</button>

</div>
