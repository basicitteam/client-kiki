
					<?php echo $this->session->flashdata('msg'); ?>
					<div class="span9 well">
						<div class="alert alert-info">
							<form class="form-search" style="padding-top:15px" action="<?php echo site_url('guru/lihat_guru'); ?>" method="POST" enctype="multipart/form-data">
							  <input type="text" placeholder="Input NIP" class="input-medium search-query">
								<button type="submit" class="btn">Search</button>
							
								<div class="btn-group pull-right">
								  <button class="btn btn-primary">Tambah Guru</button>
								  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
								  <ul class="dropdown-menu">
									<li><a href="<?php echo site_url('admin/add_guru_manual'); ?>">Manual</a></li>
									<li><a href="<?php echo site_url('admin/add_guru_upload'); ?>">Upload File</a></li>
								  </ul>
								</div>
							</form>
							<table class="table table-striped">
								<thead>
								  <tr>
									<th><center>NIP</center></th>
									<th><center>Nama</center></th>
									<th colspan='2'><center>Action</center></th>
								  </tr>
								</thead>
								<tbody>
									<?php
									foreach ($guru as $key) 
									{
									?>
									<tr>
									<td><?php echo $key['nip']; ?></td>
									<td><?php echo $key['nama_guru']; ?></td>
									<td>
									<a class="btn btn-primary" href="<?php echo site_url('admin/edit_guru/'.$key['id_guru']); ?>">
									<i class="icon-edit"></i>
									Edit
									</a>
									</td>
									<td>
									<form method="post" action="<?php echo site_url('admin/delete_guru'); ?>">
										<input type="hidden" name="id_guru" value="<?php echo $key['id_guru']; ?>"/>
										<button type="submit" class="btn btn-danger">
										<i class="icon-remove"></i>
										Delete
										</button>
									</form>
									</td>
								  </tr>
									<?php
									}
									?>
								</tbody>
							  </table>
							  <?php echo $this->pagination->create_links(); ?>
						</div>
					</div>
					
				