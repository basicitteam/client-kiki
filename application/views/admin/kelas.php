
					<div class="span9 well">
						<div class="alert alert-info">
							<?php echo $this->session->flashdata('msg'); ?>
							<form class="form-search" style="padding-top:15px" method="post" action="<?php echo site_url('admin/add_kelas'); ?>">
							  <input name="kelas" type="text" placeholder="Nama Kelas" class="input-medium search-query">
								<button type="submit" class="btn">Tambah</button>
							</form>
							<div class="row-fluid">
								<div class="span10">
									<table class="table table-striped">
										<thead>
										  <tr>
											<th><center>No.</center></th>
											<th><center>Kelas</center></th>
											<th colspan='2'><center>Action</center></th>
										  </tr>
										</thead>
										<tbody>
											<?php
											$no = 1;
											foreach ($data_kelas as $value) 
											{
											?>
											<tr>
											<td><center><?php echo $no; ?>.</center></td>
											<td><center><?php echo $value['kelas']; ?></center></td>
											<td>
											<a class="btn btn-primary pull-right" href="<?php echo site_url('admin/edit_kelas/'.$value['id_kelas']); ?>">
											<i class="icon-edit"></i>
											Edit
											</a>
											</td>
											<td>
												<form method="post" action="<?php echo site_url('admin/delete_kelas/'); ?>">
												<input type="hidden" name="id_kelas" value="<?php echo $value['id_kelas']; ?>"/>
												<button type="submit" class="btn btn-danger"><i class="icon-remove"></i>Delete</button>
												</form>
											</td>
										  </tr>
										  <?php
										  	$no++;
											}
											?>
										</tbody>
									</table>
									<?php echo $this->pagination->create_links(); ?>
								</div>  
							</div>
						</div>
					</div>
				