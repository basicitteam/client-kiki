
					<div class="span9 well">
						<div class="alert alert-info">
							<form class="form-search" style="padding-top:15px" action="<?php echo site_url('siswa/lihat_siswa'); ?>" method="POST" enctype="multipart/form-data">
							  <input type="text" placeholder="Input NIS" class="input-medium search-query">
							  <select class="span3" id="kelas">
								<option>Pilih Kelas</option>
								<option>X-A</option>
								<option>X-B</option>
								<option>X-C</option>
								<option>X-D</option>
							  </select>
								<button type="submit" class="btn">Search</button>
							
								<div class="btn-group pull-right">
								  <button class="btn btn-primary">Tambah Siswa</button>
								  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
								  <ul class="dropdown-menu">
									<li><a href="<?php echo site_url('siswa/add_siswa_manual'); ?>">Manual</a></li>
									<li><a href="<?php echo site_url('siswa/add_siswa_upload'); ?>#">Upload File</a></li>
								  </ul>
								</div>
							</form>
							
							<table class="table table-striped">
								<thead>
								  <tr>
									<th><center>NIS</center></th>
									<th><center>Nama</center></th>
									<th><center>Kelas</center></th>
									<th><center>Alamat</center></th>
									<th colspan='2'><center>Action</center></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>30209026</td>
									<td>Mark</td>
									<td>Handoyo</td>
									<td>Bandung Tengah</td>
									<td>
									<a class="btn btn-primary" href="<?php echo site_url('siswa/edit'); ?>">
									<i class="icon-edit"></i>
									Edit
									</a>
									</td>
									<td>
									<a class="btn btn-danger" href="<?php echo site_url('siswa/delete'); ?>">
									<i class="icon-remove"></i>
									Delete
									</a>
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
					
				