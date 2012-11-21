					<div class="span9 well">
						<div class="alert alert-info">
							<form class="form-search span10" style="padding-top:15px" action="<?php echo site_url('materi/lihat_tugas')?>" method="POST" enctype="multipart/form-data">
							   Mata Pelajaran
							   <select class="span3" id="kelas">
								<option>Pilih Mata Pelajaran</option>
								<option>Fisika</option>
								<option>Kimia</option>
							  </select>
							  
								<button type="submit" class="btn">Search</button>
							</form>
								<div class=" span2 btn-group pull-right" style="padding-top:15px">
								  <a class="btn btn-primary"	href="<?php echo site_url('materi/tambah_tugas_manual') ?>">Tambah Tugas<a/>
								</div>
							
							
							<table class="table table-striped">
								<thead>
								  <tr>
									<th><center>Mata Pelajaran</center></th>
									<th><center>Tugas</center></th>
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
						<!-- kolom nilai -->
						<div class="alert alert-info">
							<form class="form-search span10" style="padding-top:15px" action="<?php echo site_url('materi/lihat_tugas')?>" method="POST" enctype="multipart/form-data">
							   Mata Pelajaran
							   <select class="span3" id="mapel">
								<option>Pilih Mata Pelajaran</option>
								<option>Fisika</option>
								<option>Kimia</option>
							  </select>
							  Kelas
							  <select class="span3" id="kelas">
								<option>Pilih Kelas</option>
								<option>X-A</option>
								<option>X-B</option>
								<option>X-C</option>
								<option>X-D</option>
							  </select>
								<button type="submit" class="btn">Search</button>
							</form>
								<div class=" span2 btn-group pull-right" style="padding-top:15px">
								  <a data-toggle="modal" href="#myModal" class="btn btn-primary"	>Upload Nilai<a/>
									
								</div>
							
							
							<table class="table table-striped">
								<thead>
								  <tr>
									<th><center>Mata Pelajaran</center></th>
									<th><center>Kelas</center></th>
									<th><center>Siswa</center></th>
									<th><center>File</center></th>
									<th><center>Nilai</center></th>
									<th colspan='2'><center>Action</center></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>Fisika</td>
									<td>X-A</td>
									<td>Dendyoioi</td>
									<td>ini jenis file</td>
									<td>
									<center><input type="text" class="input-small"/></center>
									</td>
									<td>
									<a class="btn btn-success pull-right" href="#">
									<i class="icon-edit"></i>
									Submit
									</a>
									</td>
									<td>
									<a class="btn btn-primary pull-right" href="#">
									<i class="icon-edit"></i>
									Edit
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
								<!-- halaman upload nilai -->
								<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&Chi;</button>
									<h3 id="myModalLabel">Upload Nilai Tugas</h3>
								  </div>
								  <div class="modal-body">
									<p>Upload dengan file Excel</p>
										<div class="control-group">
											<label class="control-label" for="fileInput">File nilai</label>
												<div class="controls">
													<input name="userfile" class="input-file" id="fileInput" type="file">
												</div>
										</div>
								  </div>
								  <div class="modal-footer">
									<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
									<button class="btn btn-primary">Upload</button>
								  </div>
								</div>
						</div>
					</div>
					
				