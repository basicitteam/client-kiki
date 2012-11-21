					<div class="span9 well">
						<div class="alert alert-info">
							<form class="form-search" style="padding-top:15px" method="post" action="<?php echo site_url('admin/add_tahun_ajaran'); ?>">
							  <input name="tahun_ajaran" type="text" placeholder="Tahun Ajaran" class="input-medium search-query"/>
								<button type="submit" class="btn">Tambah</button>
							</form>
							<div class="row-fluid">
								<div class="span10">
									<table class="table table-striped">
										<thead>
										  <tr>
											<th><center>Tahun Ajaran</center></th>
											<th><center>Semester</center></th>
											<th colspan='2'><center>Action</center></th>
										  </tr>
										</thead>
										<tbody>
											<?php
											foreach ($tahun_ajaran as $key) {
											
											?>
											<tr <?php if ($key['status'] == 1) {
											?>
											class="alert alert-success"
											<?php												
											}?>>
											<td><center><?php echo $key['tahun_ajaran']?></center></td>
											<td><center><?php echo $key['semester']?></center></td>
											<td>
											<form method="POST" action="<?php echo site_url('admin/set_semester_aktif'); ?>">
												<input type="hidden" name="id_semester" value="<?php echo $key['id_semester']; ?>"/>
											<?php
											if ($key['status'] == 1) {
											?>
												<button type="submit" class="btn btn-success pull-right"><i class="icon-edit"></i>Aktif</button>
											<?php
											}
											else
											{
											?>
												<button type="submit" class="btn btn-primary pull-right"><i class="icon-edit"></i>Non-Aktif</button>
											<?php
											}
											?>
											</form>
											</td>
											<td>
												<form method="POST" action="<?php echo site_url('admin/delete_tahun_ajaran'); ?>">
													<input type="hidden" name="id_semester" value="<?php echo $key['id_tahun_ajaran']; ?>"/>
													<button type="submit" class="btn btn-danger pull-right"><i class="icon-remove"></i>Delete</button>
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