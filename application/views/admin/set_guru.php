
					<?php echo $this->session->flashdata('msg'); ?>
					<div class="span9 well">
						<div class="alert alert-info">
							<form class="form-search" style="padding-top:15px" action="<?php echo site_url('admin/add_set_guru'); ?>" method="POST" enctype="multipart/form-data">
							  <input type="text" placeholder="Input NIP" class="input-medium search-query">
								<button type="submit" class="btn">Search</button>
							
								<div class="btn-group pull-right">
								  <button class="btn btn-primary">Tambah Mata Pelajaran</button>
								  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
								  <ul class="dropdown-menu">
									<li><a href="<?php echo site_url('admin/add_set_guru_manual'); ?>">Manual</a></li>
								  </ul>
								</div>
							</form>
							<
							<table class="table table-striped">
								<thead>
								  <tr>
									<th><center>NIP</center></th>
									<th><center>Nama Guru</center></th>
									<th><center>Mata Pelajaran</center></th>
								  </tr>
								</thead>
								<tbody>
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
							  <?php echo $this->pagination->create_links(); ?>
						</div>
					</div>
					
				