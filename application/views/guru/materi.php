					<div class="span9 well">
						<div class="alert alert-info">
							<?php echo $this->session->flashdata('msg'); ?>
							<form class="form-search span10" style="padding-top:15px" action="<?php echo site_url('guru/lihat_materi')?>" method="POST" enctype="multipart/form-data">
							   
							   <select class="span3" id="kelas">
								<option>Pilih Mata Pelajaran</option>
								<option>Fisika</option>
								<option>Kimia</option>
							  </select>
				  
								<button type="submit" class="btn">Search</button>
							</form>
								<div class=" span2 btn-group pull-right" style="padding-top:15px">
								  <a class="btn btn-primary"	href="<?php echo site_url('guru/materi/add') ?>">Tambah Materi</a>
								</div>
							<table class="table table-striped">
								<thead>
								  <tr>
									<th><center>Mata Pelajaran</center></th>
									<th><center>Materi</center></th>
									<th><center>File</center></th>
									<th><center>Tanggal Upload</center></th>
									<th><center>Action</center></th>
								  </tr>
								</thead>
								<tbody>
									<?php foreach ($materi as $key) 
									{
									?>
									<tr>
									<td><?php echo $key['mapel']; ?></td>
									<td><?php echo $key['materi']; ?></td>
									<td><?php echo $key['file']; ?></td>
									<td><?php echo $key['timestamp']; ?></td>
									<td>
									<a class="btn btn-danger pull-right" href="#">
									<i class="icon-remove"></i>
									Delete
									</a>
									</td>
								  	</tr>
									<?php
									}?>
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
					
				