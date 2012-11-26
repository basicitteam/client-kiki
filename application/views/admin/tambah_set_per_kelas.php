		<div class="span9 well">
			<div id="main" class="alert alert-info">
				<section>
					<article>
						<form class="form-horizontal" action="<?php echo site_url('admin/proses_set_siswa'); ?>" method="POST" enctype="multipart/form-data">
						<fieldset>
						    <legend>Tambah Mata Pelajaran</legend>
							<div class="control-group">
						    <label class="control-label" for="siswa">Kelas</label>
						    <div class="controls">
						        <input placeholder="Input Nama Kelas" type="text" class="input-large" id="siswa" name="siswa">
						    </div>
						    </div>
															<div class="control-group">
						    <label class="control-label" for="mapel">Mata Pelajaran</label>
						    <div class="controls">
						        <input placeholder="Input Mata Pelajaran" type="text" class="input-large" id="mapel" name="mapel">
						    </div>
						    </div>
						    <div class="form-actions alert alert-info">
            				<input type="submit" class="btn btn-primary"/>
            				<a href="<?php echo site_url('admin/set_siswa'); ?>" class="btn btn-warning">Cancel</a>
          					</div>
						</fieldset>
						</form>
				</article>
				</section>
			</div>
		</div>