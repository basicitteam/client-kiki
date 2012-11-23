<div class="span9 well">
	<div id="main" class="alert alert-info">
		<section>
			<article>
				<form class="form-horizontal" action="<?php echo site_url('siswa/insert_siswa'); ?>" method="POST" enctype="multipart/form-data">
					<fieldset>
						<legend>Tambah Siswa</legend>
						<div class="control-group">
						<label class="control-label" for="nis">Nis</label>
						<div class="controls">
							<input type="text" class="input-large" id="nis" name="nis">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="nama">Nama</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="nama" name="nama">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="jns_kelamin">Jenis Kelamin</label>
						<div class="controls">
							<input type="radio" name="jns_kelamin" value="Laki - Laki" />Laki - Laki
							<input type="radio" name="jns_kelamin" value="Perempuan" />Perempuan
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="alamat">Alamat</label>
						<div class="controls">
							<textarea class="input-xlarge" id="alamat" rows="3" name="alamat"></textarea>
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="alamat">Foto</label>
						<div class="controls">
							<input name="userfile" class="input-file" id="fileInput" type="file">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="kelas">Kelas</label>
						<div class="controls">
								<select id="kelas" name="kelas">  
												<option value="kelas">X-A</option>  
												<option value="kelas">X-B</option>  
								</select>
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="user_id">User id</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="user_id" name="user_id">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="password">Password</label>
						<div class="controls">
							<input type="password" class="input-xlarge" id="password" name="password">
						</div>
						</div>
						<div class="form-actions alert alert-info">
						<input type="submit" class="btn btn-primary"/>
						<a href="<?php echo site_url('siswa'); ?>" class="btn btn-warning">Cancel</a>
						</div>
					</fieldset>
				</form>
			</article>
		</section>
	</div>
</div>