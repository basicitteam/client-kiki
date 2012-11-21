
					<div class="span9 well">
						<div class="alert alert-info">
							<form class="form-search" style="padding-top:15px" action="<?php echo site_url('guru/lihat_guru'); ?>" method="POST" enctype="multipart/form-data">
							  <input type="text" placeholder="Input NIP" class="input-medium search-query">
							  <select class="span3" id="kelas">
								<option>Pilih Mata Pelajaran</option>
								<option>Bahasa Inggris 1</option>
								<option>Bahasa Inggris 2</option>
								<option>Fisika 1</option>
								<option>Fisika 2</option>
								<option>Biologi 1</option>
								<option>Biologi 2</option>
							  </select>
								<button type="submit" class="btn">Search</button>
							
								<div class="btn-group pull-right">
								  <button class="btn btn-primary">Tambah Guru</button>
								  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
								  <ul class="dropdown-menu">
									<li><a href="<?php echo site_url('guru/add_guru_manual'); ?>">Manual</a></li>
									<li><a href="<?php echo site_url('guru/add_guru_upload'); ?>">Upload File</a></li>
								  </ul>
								</div>
							</form>
							
							<table class="table table-striped">
								<thead>
								  <tr>
									<th><center>NIP</center></th>
									<th><center>Nama</center></th>
									<th><center>Mata Pelajaran</center></th>
									<th><center>Alamat</center></th>
									<th colspan='2'><center>Action</center></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>30209026</td>
									<td>Mark</td>
									<td>Biologi 1	</td>
									<td>Bandung Tengah</td>
									<td>
									<a class="btn btn-primary" href="<?php echo site_url('guru/edit'); ?>">
									<i class="icon-edit"></i>
									Edit
									</a>
									</td>
									<td>
									<a class="btn btn-danger" href="<?php echo site_url('guru/delete'); ?>">
									<i class="icon-remove"></i>
									Delete
									</a>
									</td>
								  </tr>
								</tbody>
							  </table>
							  <div class="pagination">
								  <center><ul>
									<li><a href="#">&laquo;</a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&raquo;</a></li>
								  </ul></center>
							</div>
						</div>
					</div>
					
				