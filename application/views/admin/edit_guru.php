<!doctype html>
<html>
<head>
	<title>E-learning</title>
	<link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet"/>
</head>
<body>
	<header>
	<div class="container">
	<div class="row" style="padding-top:75px">
		<div class="span12 well">
			<div id="main">
				<section>
					<article>
						<form class="form-horizontal" action="<?php echo site_url('guru/update'); ?>" method="POST" enctype="multipart/form-data">
						<fieldset>
						    <legend>Edit Guru</legend>
							<div class="control-group">
						    <label class="control-label" for="nip">Nip</label>
						    <div class="controls">
						        <input type="text" class="input-large" readonly="true" id="nip" name="nip">
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
						    <label class="control-label" for="mapel">Mata Pelajaran</label>
						    <div class="controls">
									<select id="mapel" name="mapel">  
													<option value="mapel">Biologi</option>  
													<option value="mapel">Matematika</option>  
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
						    <div class="form-actions">
            				<input type="submit" class="btn btn-primary"/>
            				<a href="<?php echo site_url('guru'); ?>" class="btn btn-warning">Cancel</a>
          					</div>
						</fieldset>
						</form>
				</article>
				</section>
			</div>
		</div>
		</div>
	</div>
	</header>	
	<footer>
		<section>
			<div id="foot">
			<center><i><i></center>
			</div>
		</section>
	</footer>
</body>
</html>