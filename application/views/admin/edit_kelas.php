<div class="span9 well">
	<div id="main" class="alert alert-info">
		<section>
			<article>
				<legend>Edit Kelas</legend>
				<form class="form-search" style="padding-top:15px" method="post" action="<?php echo site_url('admin/update_kelas'); ?>">
					<input name="kelas" type="text" placeholder="Nama Kelas" class="input-medium search-query" value="<?php echo $kelas['kelas']; ?>">
					<input name="id_kelas" type="hidden" value="<?php echo $kelas['id_kelas']; ?>">
					<button type="submit" class="btn btn-primary">Update</button>
					<a href="<?php echo site_url('admin/kelas'); ?>" class="btn btn-warning">Cancel</a>
				</form>
			</article>
		</section>
	</div>
</div>