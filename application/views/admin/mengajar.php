					<?php echo $this->session->flashdata('msg'); ?>
					<div class="span9 well">
						<div class="alert alert-info">
							<a href="<?php echo site_url('admin/mengajar/add'); ?>">Tambah Guru Mengajar</a>
							<table class="table table-striped">
								<thead>
								  <tr>
									<th><center>NIP</center></th>
									<th><center>Nama</center></th>
									<th><center>Mengajar Pelajaran</center></th>
									<th>Action</th>
								  </tr>
								</thead>
								<tbody>
									<?php
									foreach ($mengajar as $key) 
									{
									?>
									<tr>
									<td><center><?php echo $key['nip']; ?></center></td>
									<td><center><?php echo $key['nama_guru']; ?></center></td>
									<td><center><?php echo $key['mapel']; ?></center></td>
									<td>
										<form method="POST" action="<?php echo site_url('admin/mengajar/delete'); ?>">
											<input type="hidden" name="id_mengajar" value="<?php echo $key['id_mengajar']; ?>"/>
											<button type="submit" class="btn btn-danger">Delete</button>
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