<div class="span9 well">
			<div id="main" class="alert alert-info">
				<section>
					<article>
						<form class="form-horizontal" action="<?php echo site_url('admin/mengambil/add_proses'); ?>" method="POST" enctype="multipart/form-data">
						<fieldset>
						    <legend>Tambah Siswa Mengambil Mata Pelajaran</legend>
							<div class="control-group">
						    <label class="control-label" for="nip">NIS</label>
						    <div class="controls">
						        <input placeholder="Input NIS" type="text" class="input-large" id="nis" name="nis">
						    </div>
						    </div>
							<div class="control-group select optional"><label class="select optional control-label" for="mapel">Mata Pelajaran</label>
							<div class="controls">
								<select class="select optional" id="mapel" multiple="multiple" name="mapel[]">
								<?php 
								foreach ($mapel as $key) 
								{
								?>
								<option value="<?php echo $key['id_mengajar']; ?>"><?php echo $key['mapel'].' - '.$key['nama_guru']; ?></option>
								<?php
								}
								?>
								</select>
							</div>
							</div>
						    <div class="form-actions alert alert-info">
            				<input type="submit" class="btn btn-primary"/>
            				<a href="<?php echo site_url('admin/mengambil'); ?>" class="btn btn-warning">Cancel</a>
          					</div>
						</fieldset>
						</form>
				</article>
				</section>
			</div>
		</div>