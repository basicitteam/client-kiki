<div class="span9 well">
	<div id="main" class="alert alert-info">
		<section>
			<article>
				<form class="form-horizontal" action="<?php echo site_url('admin/update_siswa'); ?>" method="POST" enctype="multipart/form-data">
					<fieldset>
						<legend>Edit Siswa</legend>
						<div class="control-group">
						<label class="control-label" for="nis">Nis</label>
						<div class="controls">
						<input type="text" class="input-small" readonly="true" id="nis" name="nis" value="<?php echo $siswa['nis'];?>">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="nama">Nama</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="nama" name="nama" value="<?php echo $siswa['nama_siswa'];?>">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="jns_kelamin">Jenis Kelamin</label>
						<div class="controls">
							<input type="radio" name="jns_kelamin" value="Laki-Laki" />Laki - Laki
							<input type="radio" name="jns_kelamin" value="Perempuan" />Perempuan
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="alamat">Alamat</label>
						<div class="controls">
							<textarea class="input-xlarge" id="alamat" rows="3" name="alamat" value="<?php echo $siswa['alamat'];?>"></textarea>
						</div>
						</div>
						<div class="control-group">  
							<label class="control-label" for="kelas">Kelas</label>  
								<div class="controls">  
									<select id="kelas" name="kelas">
										<?php foreach($kelas_data as $test){ ?>  
										<option value="<?php echo $test['id_kelas']?>"><?php echo $test['kelas']?></option>
										<?php } ?>
									</select>  
								</div>  
						</div>
						<div class="form-actions alert alert-info">
						<input type="submit" name="btn" value="Update Siswa" class="btn btn-primary"/>
						<a href="<?php echo site_url('admin/siswa'); ?>" class="btn btn-warning">Cancel</a>
						</div>
					</fieldset>
				</form>
			</article>
		</section>
	</div>
</div>