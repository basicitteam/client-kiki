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
									<th colspan="2"><center>Action</center></th>
								  </tr>
								</thead>
								<tbody>
									<pre>
									<?php
									print_r($mengajar);
									?>
								</pre>
								</tbody>
							  </table>
							  <?php echo $this->pagination->create_links(); ?>
						</div>
					</div>