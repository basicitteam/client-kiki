<div class="span9 well">
	<div id="main" class="alert alert-info">
		<section>
			<article>
				<legend>Edit Tahun Ajaran</legend>
				<form class="form-search" style="padding-top:15px" method="post" action="<?php echo site_url('tahunajaran/update'); ?>">
					  <input type="text" placeholder="Tahun Awal" class="input-medium search-query"> -
					  <input type="text" placeholder="Tahun Akhir" class="input-medium search-query">
					  <select class="span3" id="kelas">
						<option>Pilih Semester</option>
						<option>Semester 1</option>
						<option>Semester 2</option>
					  </select>
						<button type="submit" class="btn btn-primary">Update</button>
						<a href="<?php echo site_url('tahunajaran'); ?>" class="btn btn-warning">Cancel</a>
				</form>
			</article>
		</section>
	</div>
</div>