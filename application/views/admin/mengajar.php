					<?php echo $this->session->flashdata('msg'); ?>
					<div class="span9 well">
						<div class="alert alert-info">
							<a href="<?php echo site_url('admin/add_mengajar'); ?>">Tambah Guru Mengajar</a>
							<table class="table table-striped">
								<thead>
								  <tr>
									<th><center>NIP</center></th>
									<th><center>Nama</center></th>
									<th><center>Mengajar Pelajaran</center></th>
									<th colspan='2'><center>Action</center></th>
								  </tr>
								</thead>
								<tbody>
									<?php
									foreach ($mengajar as $key) 
									{
									?>
									<tr>
									<td><?php echo $key['nip']; ?></td>
									<td><?php echo $key['nama_guru']; ?></td>
									<td><?php echo $key['mapel']; ?></td>
									<td>
									<a class="btn btn-primary" href="<?php echo site_url('admin/edit_mengajar/'.$key['id_mengajar']); ?>">
									<i class="icon-edit"></i>
									Edit
									</a>
									</td>
									<td>
									<form method="post" action="<?php echo site_url('admin/delete_mengajar'); ?>">
										<input type="hidden" name="id_guru" value="<?php echo $key['id_mengajar']; ?>"/>
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