<div class="span9 well">
			<div id="main" class="alert alert-info">
				<section>
					<article>
						<form class="form-horizontal" action="<?php echo site_url('admin/proses_set_guru'); ?>" method="POST" enctype="multipart/form-data">
						<fieldset>
						    <legend>Tambah Mata Pelajaran</legend>
							<div class="control-group">
						    <label class="control-label" for="nip">Nip</label>
						    <div class="controls">
						        <input placeholder="Input NIP" type="text" class="input-large" id="nip" name="nip">
						    </div>
						    </div>
							<div class="control-group select optional"><label class="select optional control-label" for="mapel">Mata Pelajaran</label>
							<div class="controls">
								<input name="mapel" type="hidden" value="">
								<select class="select optional" id="mapel" multiple="multiple" name="mapel">
								<option value="Matematika">Matematika</option>
								<option value="Biologi">Biologi</option>
								<option value="Kimia">Kimia</option>
								<option value="Fisika">Fisika</option>
								</select>
							</div>
							</div>
						    <div class="form-actions alert alert-info">
            				<input type="submit" class="btn btn-primary"/>
            				<a href="<?php echo site_url('admin/set_guru'); ?>" class="btn btn-warning">Cancel</a>
          					</div>
						</fieldset>
						</form>
				</article>
				</section>
			</div>
		</div>