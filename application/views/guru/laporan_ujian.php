<div class="span9 well">
						<div class="alert alert-info">
							<form class="form-search" style="padding-top:15px" action="<?php echo site_url('materi/lihat_lap_nilai')?>" method="POST" enctype="multipart/form-data">
							   Per-Siswa
							   <input id="ujian" class="span2" type="text" placeholder="NIS"/>
							  
							  Per-Kelas
							  <select class="span3" id="kelas">
								<option>Pilih Kelas</option>
								<option>X-A</option>
								<option>X-B</option>
								<option>X-C</option>
								<option>X-D</option>
							  </select>
							  Per-Ujian
							  <select class="span3" id="ujian">
								<option>Judul Ujian</option>
								<option>Ujian A</option>
								<option>Ujian B</option>
								<option>Ujian C</option>
								<option>Ujian D</option>
							  </select>
							  
								<button type="submit" class="btn">Search</button>
							</form>
							
							<table class="table table-striped">
								<thead>
								  <tr>
									<th><center>NIS</center></th>
									<th><center>Nama Siswa</center></th>
									<th><center>Kelas</center></th>
									<th><center>Jenis Ujian</center></th>
									<th><center>Nilai</center></th>
									<th colspan='2'><center>Action</center></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>30209026</td>
									<td>Dendyoioi</td>
									<td>X-A</td>
									<td>Fisika1</td>
									<td>89</td>
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