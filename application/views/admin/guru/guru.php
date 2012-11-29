
					<?php echo $this->session->flashdata('msg'); ?>
					<div class="span9 well">
						<div class="alert alert-info">
							<form class="form-search" style="padding-top:15px" action="<?php echo site_url('admin/guru/index'); ?>" method="POST" enctype="multipart/form-data">
							  <input type="text" placeholder="Input NIP" class="input-medium search-query" name="nip">
								<button type="submit" class="btn">Search</button>
							
								<div class="btn-group pull-right">
								  <button class="btn btn-primary">Tambah Guru</button>
								  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
								  <ul class="dropdown-menu">
									<li><a href="<?php echo site_url('admin/guru/add'); ?>">Manual</a></li>
									<li><a href="<?php echo site_url('admin/guru/add_upload'); ?>">Upload File</a></li>
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
									<td><a href="<?php echo site_url('admin/guru/view/'.$key['id_guru']); ?>"><?php echo $key['nama_guru']; ?></a></td>
									<td>
									<a class="btn btn-primary" href="<?php echo site_url('admin/guru/edit/'.$key['id_guru']); ?>">
									<i class="icon-edit"></i>
									Edit
									</a>
									</td>
									<td>
									<form method="post" action="<?php echo site_url('admin/guru/delete'); ?>">
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
					
				