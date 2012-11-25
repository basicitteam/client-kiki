
					<div class="span9 well">
						<div class="alert alert-info">
							<?php echo $this->session->flashdata('msg'); ?>
							<form class="form-search" style="padding-top:15px" method="post" action="<?php echo site_url('admin/mapel/add'); ?>">
							  <input name="mata_pelajaran" type="text" placeholder="Nama Mata Pelajaran" class="input-medium search-query">             
								<button type="submit" class="btn">Tambah</button>
							</form>
							<div class="row-fluid">
								<div class="span10">
									<table class="table table-striped">
										<thead>
										  <tr>
											<th><center>Mata Pelajaran</center></th>
											<th colspan='2'><center>Action</center></th>
										  </tr>
										</thead>
										<tbody>
											<?php
											foreach ($mata_pelajaran as $key) 
											{
											?>
											<tr>
											<td><center><?php echo $key['mapel']; ?></center></td>
											<td>
											<a class="btn btn-primary pull-right" href="<?php echo site_url('admin/mapel/edit/'.$key['id_mapel']); ?>">
											<i class="icon-edit"></i>
											Edit
											</a>
											</td>
											<td>
											<form method="POST" action="<?php echo site_url('admin/mapel/delete'); ?>">
												<input type="hidden" name="id_mata_pelajaran" value="<?php echo $key['id_mapel']; ?>"/>
												<button type="submit" class="btn btn-danger"><i class="icon-remove"></i>
											Delete</button>
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
						</div>
					</div>
					
				