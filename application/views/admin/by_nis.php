
					<div class="span9 well">
						<div class="alert alert-info">
						<div class="row-fluid">
						<div class="span10">
							<form class="form-inline" id="input-nis" action="<?php echo site_url('admin/siswa_nis');?>" method="get">
								<fieldset>
								<div class="control-group">
								<div class="controls">
									<input name="nis" type="text" class="input-small" id="nis" placeholder="Input Nis"/>
									<input id="btn-nis" class="btn btn-primary" type="submit" name="btn-nis" value="submit"/>
								</div>
								</div>        
								</fieldset>
								</form>
						</div>
						<div class="span2">					
								<div class="btn-group pull-right">
								  <button class="btn btn-primary">Tambah Siswa</button>
								  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
								  <ul class="dropdown-menu">
									<li><a data-toggle="modal" href="#tambah">Manual</a></li>
									<li><a href="<?php echo site_url('siswa/add_siswa_upload'); ?>">Upload File</a></li>
								  </ul>
								</div>
							</div>
						</div>
						<div class="row-fluid" style="padding-top:15px">
						<?php echo $this->session->flashdata('msg'); ?>
									<table class="table table table-striped table-bordered table-condensed">
										<thead>
										  <tr>
											<th><center>No.</center></th>
											<th><center>NIS</center></th>
											<th><center>Nama</center></th>
											<th><center>Jenis Kelamin</center></th>
											<th><center>Alamat</center></th>
											<th><center>Kelas</center></th>
											<th><center>User ID</center></th>
											<th><center>Password</center></th>
											<th colspan='2'><center>Action</center></th>
										  </tr>
										</thead>
										<tbody>
											<tr>
											<td>1.</td>
											<td><?php echo $siswa['nis'] ?></td>
											<td><?php echo $siswa['nama_siswa'] ?></td>
											<td><?php echo $siswa['jns_kelamin'] ?></td>
											<td><?php echo $siswa['alamat'] ?></td>
											<td><?php echo $siswa['kelas'] ?></td>
											<td><?php echo $siswa['username'] ?></td>
											<td><?php echo $siswa['password'] ?></td>
											<td>
											<a class="btn btn-primary" href="<?php echo site_url('admin/cari_siswa/'.$siswa['nis']); ?>">
											<i class="icon-edit"></i>
											Edit
											</a>
											</td>
											<td>
											<form method="post" action="<?php echo site_url('admin/delete_siswa/'); ?>">
												<input type="hidden" name="nis" value="<?php echo $siswa['nis']; ?>"/>
												<button type="submit" class="btn btn-danger"><i class="icon-remove"></i>Delete</button>
												</form>
											</td>
										  </tr>
										</tbody>
									</table>
								<div class="pagination">
									<center>
										<ul>
										  <li><a href="#">&laquo;</a></li>
										  <li><a href="#">1</a></li>
										  <li><a href="#">2</a></li>
										  <li><a href="#">3</a></li>
										  <li><a href="#">4</a></li>
										  <li><a href="#">&raquo;</a></li>
										</ul>
									</center>
								</div>
								</div>
						</div>
					</div>
									
				<form class="form-horizontal" action="<?php echo site_url('admin/add_siswa_manual'); ?>" method="POST" enctype="multipart/form-data">
					<div id="tambah" class="modal hide fade" style="display: none;">
						<div class="modal-header">
						  <button class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
						  <h3>Tambah Data Siswa</h3>
						</div>
						<div class="modal-body">
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
								<input type="radio" name="jns_kelamin" value="Laki-Laki" />Laki - Laki
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
							<label class="control-label" for="kelas">Kelas</label>
							<div class="controls">
									<select id="kelas" name="kelas">  
										<?php foreach($kelas_data as $test){ ?>  
												<option value="<?php echo $test['id_kelas']?>"><?php echo $test['kelas']?></option>
													<?php } ?> 
									</select>
							</div>
							</div>
							<div class="control-group">
							<label class="control-label" for="username">Username</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="username" name="username">
							</div>
							</div>
							<div class="control-group">
							<label class="control-label" for="password">Password</label>
							<div class="controls">
								<input type="password" class="input-xlarge" id="password" name="password">
							</div>
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-danger" data-dismiss="modal">Batal</a>
							<button type="submit" name="btn" value="Tambah Siswa" class="btn btn-primary"><i class="icon-check"></i> Tambah Siswa</button>
					</div>
				</form>						