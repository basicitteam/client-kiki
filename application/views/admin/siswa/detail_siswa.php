		<div class="span9 well">
		<div class="alert alert-info">
			<center><h3>Detail User</h3></center>
			<div id="main">
				<table class="table table-striped table-condensed">
					<tbody>
					<tr>
					<td colspan="2">
						<center>
							<li class="span3">
							  <a href="<?php echo base_url('assets/uploads/foto_siswa/'.$siswa['foto']); ?>" class="thumbnail">
								<img src="<?php echo base_url('assets/uploads/foto_siswa/'.$siswa['foto']); ?>" alt="">
							  </a>
							</li>
						</center>
					</td>
					</tr>
					<tr>
					<td>Nis</td>
					<td><?php echo $siswa['nis']; ?></td>
					</tr>
					<tr>
					<td>Nama</td>
					<td><?php echo $siswa['nama_siswa']; ?></td>
					</tr>
					<tr>
					<td>Alamat Lengkap</td>
					<td><?php echo $siswa['alamat']; ?></td>
					</tr>
					<tr>
					<td>Jenis Kelamin</td>
					<td><?php echo $siswa['jns_kelamin']; ?></td>
					</tr>
					<tr>
					<td>Kelas</td>
					<td><?php echo $siswa['kelas']; ?></td>
					</tr>
					</tbody>
				</table>
				<div class="form-actions">
				<?php echo $this->session->flashdata('msg'); ?>
				<form clas="form-inline">
					<a data-toggle="modal" class="btn btn-primary" href="#edit">
					<i class="icon-edit"></i>
					Edit
					</a>
					<a href="<?php echo site_url('admin/siswa'); ?>" class="btn btn-warning">Back</a>
				</form>
				</div>
			</div>
		</div>
		</div>
		
		<form class="form-horizontal" action="<?php echo site_url('admin/siswa/update_siswa'); ?>" method="POST" enctype="multipart/form-data">
					<div id="edit" class="modal animated flipInX" style="display: none;">
						<div class="modal-header">
						  <button class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
						  <h3>Edit Data Siswa</h3>
						</div>
						<div class="modal-body">
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
								<input type="text" class="input-xlarge" id="alamat"  name="alamat" value="<?php echo $siswa['alamat'];?>">
							</div>
							</div>
							<div class="control-group">  
								<label class="control-label" for="kelas">Kelas</label>  
									<div class="controls">  
										<select id="kelas" name="kelas">
											<option>Pilih Kelas</option>
											<?php foreach($kelas_data as $test){ ?>  
											<option value="<?php echo $test['id_kelas']?>"><?php echo $test['kelas']?></option>
											<?php } ?>
										</select>  
									</div>  
							</div>
							<div class="control-group">
							<label class="control-label" for="foto">Foto</label>
								<div class="controls">
									<input name="userfile" class="input-file" id="fileInput" type="file">
								</div>
							</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-danger" data-dismiss="modal">Cancel</a>
							<button type="submit" name="btn" value="Update Siswa" class="btn btn-primary"><i class="icon-check"></i> Update Siswa</button>
					</div>
				</form>