<div class="span9 well">
	<div id="main" class="alert alert-info">
		<section>
			<article>
				<form class="form-horizontal" action="<?php echo site_url('guru/materi/add_proses'); ?>" method="POST" enctype="multipart/form-data">
					<fieldset>
						<legend>Tambah Materi</legend>
						<div class="control-group">
						<label class="control-label" for="nama_mata_pelajaran">Nama Mata Pelajaran</label>
						<div class="controls">
								<select id="nama_mata_pelajaran" name="id_mengajar">
								<?php 
								foreach ($mapel as $key) 
								{
								?>
								<option value="<?php echo $key['id_mengajar']; ?>"><?php echo $key['mapel']; ?></option>
								<?php
								}
								?>  
								</select>
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="nama_materi">Nama Materi</label>
						<div class="controls">
							<input type="text" name="materi"/>
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="keterangan">Keterangan</label>
						<div class="controls">
							<textarea class="input-xlarge" id="keterangan" rows="3" name="keterangan"></textarea>
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="file">Upload File</label>
						<div class="controls">
							<input type="file" name="userfile" size="20" id="file" />
						</div>
						</div>
						<div class="form-actions alert alert-info">
						<input type="submit" class="btn btn-primary"/>
						<a href="<?php echo site_url('guru/materi'); ?>" class="btn btn-warning">Cancel</a>
						</div>
					</fieldset>
				</form>
			</article>
		</section>
	</div>
</div>