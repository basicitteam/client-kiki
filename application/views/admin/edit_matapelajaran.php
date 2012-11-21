<div class="span9 well">
	<div id="main" class="alert alert-info">
		<section>
			<article>
				<legend>Edit Mata Pelajaran</legend>
				<form class="form-search" style="padding-top:15px" method="post" action="<?php echo site_url('admin/update_mata_pelajaran'); ?>">
				  <input name="mata_pelajaran" type="text" class="input-medium search-query" value="<?php echo $mata_pelajaran['mapel']; ?>">
				  <input type="hidden" name="id_mata_pelajaran" value="<?php echo $mata_pelajaran['id_mapel']; ?>"/>             
					<button type="submit" class="btn btn-primary">Update</button>
					<a href="<?php echo site_url('admin/matapelajaran'); ?>" class="btn btn-warning">Cancel</a>
				</form>
			</article>
		</section>
	</div>
</div>