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
									<td><a href="<?php echo site_url('guru/materi/view/'.$key['id_materi']); ?>"><?php echo $key['materi']; ?></a></td>
									<td><a href="<?php echo base_url('assets/uploads/materi/'.$key['file']); ?>"><?php echo $key['file']; ?></a></td>
									<td><?php echo $key['timestamp']; ?></td>
									<td>
									<form method="POST" action="<?php echo site_url('guru/materi/delete'); ?>">
										<input type="hidden" name="id_materi" value="<?php echo $key['id_materi']; ?>"/>
										<button class="btn btn-danger" type="submit">
										<i class="icon-remove"></i>
										Delete</button>
									</form>
									</td>
								  	</tr>
									<?php
									}?>
								</tbody>
							  </table>
								<?php echo $this->pagination->create_links(); ?>
						</div>
					</div>
					
				