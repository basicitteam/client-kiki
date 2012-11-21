		<div class="span9 well">
			<div id="main" class="alert alert-info">
			<center><h3>Tambah Guru melalui file Excel</h3></center>
				<section>
				<article>
						<form class="form-horizontal" action="<?php echo site_url('guru/insert_guru_upload'); ?>" method="POST" enctype="multipart/form-data">
						<fieldset>
						    <div class="control-group">
								<label class="control-label" for="fileInput">File input</label>
									<div class="controls">
										<input name="userfile" class="input-file" id="fileInput" type="file">
									</div>
							</div>
							<div class="form-actions alert-info">
									<input type="submit" name="btn" value="Upload" class="btn btn-primary"/>
									<a href="<?php echo site_url('guru'); ?>" class="btn btn-warning">Cancel</a>
								</div>
						</fieldset>
						</form>
				</article>
				</section>
			</div>
		</div>