		<div class="span9 well">
			<div id="main" class="alert alert-info">
				<section>
					<article>
						<form class="form-horizontal" action="<?php echo site_url('guru/insert_guru_manual'); ?>" method="POST" enctype="multipart/form-data">
						<fieldset>
						    <legend>Tambah Guru</legend>
							<div class="control-group">
						    <label class="control-label" for="nip">Nip</label>
						    <div class="controls">
						        <input type="text" class="input-large" id="nip" name="nip">
						    </div>
						    </div>
						    <div class="control-group">
						    <label class="control-label" for="nama">Nama</label>
						    <div class="controls">
						        <input type="text" class="input-xlarge" id="nama" name="nama">
						    </div>
						    </div>
							 <div class="control-group">
						    <label class="control-label" for="nama">Email</label>
						    <div class="controls">
						        <input type="text" class="input-large" id="email" name="email">
						    </div>
						    </div>
							<div class="control-group">
								<label class="control-label" for="fileInput">Foto</label>
									<div class="controls">
										<input name="userfile" class="input-file" id="fileInput" type="file">
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
						    <label class="control-label" for="mapel">Mata Pelajaran</label>
						    <div class="controls">
									<select multiple="mapel" class="checkbox inline">
									  <option>bahasa indonesia</option>
									  <option>matematika</option>
									  <option>Bahasa Inggris</option>
									  <option>Ekonomi</option>
									  <option>Fisika</option>
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
            				<a href="<?php echo site_url('guru'); ?>" class="btn btn-warning">Cancel</a>
          					</div>
						</fieldset>
						</form>
				</article>
				</section>
			</div>
		</div>