
					<div class="span9 well">
						<div class="alert alert-info">
							<form class="form-search span10" style="padding-top:15px" action="<?php echo site_url('materi/lihat_materi')?>" method="POST" enctype="multipart/form-data">
							   
							   <select class="span3" id="kelas">
								<option>Pilih Mata Pelajaran</option>
								<option>Fisika</option>
								<option>Kimia</option>
							  </select>
							  
							  <select class="span3" id="kelas">
								<option>Pilih Materi</option>
								<option>Turunan</option>
								<option>Gaya dan Usaha</option>
								<option>Getaran</option>
								<option>Listrik</option>
							  </select>
								<button type="submit" class="btn">Search</button>
							</form>
								<div class=" span2 btn-group pull-right" style="padding-top:15px">
								  <a class="btn btn-primary"	href="<?php echo site_url('materi/tambah_materi_manual') ?>">Tambah Materi<a/>
								</div>
							
							
							<table class="table table-striped">
								<thead>
								  <tr>
									<th><center>Mata Pelajaran</center></th>
									<th><center>Materi</center></th>
									<th><center>Keterangan</center></th>
									<th><center>File</center></th>
									<th colspan='3'><center>Action</center></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>Fisika</td>
									<td>Turunan</td>
									<td>Hitung Sendiri</td>
									<td>ini jenis file</td>
									<td>
									<a class="btn btn-success pull-right" href="#">
									<i class="icon-edit"></i>
									Share
									</a>
									</td>
									<td>
									<a class="btn btn-primary pull-right" href="#">
									<i class="icon-edit"></i>
									Edit
									</a>
									</td>
									<td>
									<a class="btn btn-danger pull-right" href="#">
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
					
				