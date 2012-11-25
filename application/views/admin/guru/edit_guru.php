		<div class="span9 well">
			<div id="main" class="alert alert-info">
				<section>
					<article>
						<form class="form-horizontal" action="<?php echo site_url('admin/guru/update'); ?>" method="POST" enctype="multipart/form-data">
						<fieldset>
						    <legend>Edit Guru</legend>
							<div class="control-group">
						    <label class="control-label" for="nip">Nip</label>
						    <div class="controls">
						        <input type="text" disabled="true" class="input-large" id="nip" name="nip" value="<?php echo $guru['nip']; ?>">
						        <input type="hidden" name="id_guru" value="<?php echo $guru['id_guru']; ?>"/>
						    </div>
						    </div>
						    <div class="control-group">
						    <label class="control-label" for="nama">Nama</label>
						    <div class="controls">
						        <input type="text" class="input-xlarge" id="nama" name="nama" value="<?php echo $guru['nama_guru']; ?>">
						    </div>
						    </div>
						     <div class="control-group">
						    <label class="control-label" for="telp">Telepon/Hp</label>
						    <div class="controls">
						        <input type="text" class="input-large" id="telp" name="telp" value="<?php echo $guru['no_telp']; ?>">
						    </div>
						    </div>
							 <div class="control-group">
						    <label class="control-label" for="email">Email</label>
						    <div class="controls">
						        <input type="text" class="input-large" id="email" name="email" value="<?php echo $guru['email']; ?>">
						    </div>
						    </div>
						    <div class="control-group">
						    <label class="control-label" for="jns_kelamin">Jenis Kelamin</label>
						    <div class="controls">
						        <input type="radio" name="jns_kelamin" value="Laki - Laki" <?php if($guru['jns_kelamin'] == 'Laki - Laki'){ echo 'checked="true"'; } ?>/>Laki - Laki
								<input type="radio" name="jns_kelamin" value="Perempuan" <?php if($guru['jns_kelamin'] == 'Perempuan'){ echo 'checked="true"'; } ?>/>Perempuan
						    </div>
						    </div>
						    <div class="control-group">
						    <label class="control-label" for="alamat">Alamat</label>
						    <div class="controls">
						        <textarea class="input-xlarge" id="alamat" rows="3" name="alamat"><?php echo $guru['alamat']; ?></textarea>
						    </div>
						    </div>
						    <div class="alert">
						    <p>Optional</p>
						    <div class="control-group">
								<label class="control-label" for="fileInput">Foto</label>
									<div class="controls">
										<input name="userfile" class="input-file" id="fileInput" type="file">
									</div>
							</div>
						    <div class="control-group">
						    <label class="control-label" for="password">Password</label>
						    <div class="controls">
						        <input type="password" class="input-xlarge" id="password" name="password">
						    </div>
						    </div>
						    </div>
						    <div class="form-actions alert alert-info">
            				<input type="submit" class="btn btn-primary"/>
            				<a href="<?php echo site_url('admin/guru'); ?>" class="btn btn-warning">Cancel</a>
          					</div>
						</fieldset>
						</form>
				</article>
				</section>
			</div>
		</div>