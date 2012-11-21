
					<div class="span9 well">
						<div class="alert alert-info">
							<form class="form-search" style="padding-top:15px" method="post" action="<?php echo site_url('admin/add_mata_pelajaran'); ?>">
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
											<a class="btn btn-primary pull-right" href="<?php echo site_url('admin/edit_mata_pelajaran/'.$key['id_mapel']); ?>">
											<i class="icon-edit"></i>
											Edit
											</a>
											</td>
											<td>
											<form method="POST" action="<?php echo site_url('admin/delete_mata_pelajaran'); ?>">
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
					
				