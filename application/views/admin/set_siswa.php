
					<?php echo $this->session->flashdata('msg'); ?>
					<div class="span9 well">
						<div class="alert alert-info">
							<form class="form-search" style="padding-top:15px" action="<?php echo site_url('admin/mengambil/search'); ?>" method="POST" enctype="multipart/form-data">
							  <input type="text" placeholder="Input NIS" class="input-medium search-query">
								<button type="submit" class="btn">Search</button>
				
							</form>
							<div class="btn-group pull-right">
								<a class="btn btn-primary" href="<?php echo site_url('admin/mengambil/add'); ?>">Tambah Data</a>
							</div>
							<table class="table table-striped">
								<thead>
								  <tr>
									<th><center>NIS</center></th>
									<th><center>Nama Siswa</center></th>
									<th><center>Mata Pelajaran</center></th>
									<th><center>Guru</center></th>
									<th><center>Action</center></th>
								  </tr>
								</thead>
								<tbody>
									<?php 
									foreach ($mengambil as $key) 
									{
									?>
									<tr>
									<td><center><?php echo $key['nis']; ?></center></td>
									<td><center><?php echo $key['nama_siswa']; ?></center></td>
									<td><center><?php echo $key['mapel']; ?></center></td>
									<td><center><?php echo $key['nama_guru']; ?></center></td>
									<td>
										<form method="post" action="<?php echo site_url('admin/mengambil/delete'); ?>">
											<input type="hidden" name="id_mengambil" value="<?php echo $key['id_mengambil']; ?>"/>
											<button type="submit" class="btn btn-danger">Delete</button>
										</form>
									</td>
								  	</tr>
									<?php
									}
									?>
								</tbody>
							  </table>
							<div class="pagination">
							  <?php echo $this->pagination->create_links(); ?>
							</div>
					</div>
				</div>
					
				