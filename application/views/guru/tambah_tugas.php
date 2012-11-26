<div class="span9 well">
	<div id="main" class="alert alert-info">
		<section>
			<article>
				<form class="form-horizontal" action="<?php echo site_url('materi/insert_materi_manual'); ?>" method="POST" enctype="multipart/form-data">
					<fieldset>
						<legend>Tambah Tugas</legend>
						
						<div class="control-group">
						<label class="control-label" for="nama_mata_spelajaran">Mata Pelajaran</label>
							<div class="controls">
							<select class="span3" id="kelas">
								<option>Pilih Mapel</option>
								<option>Fisika</option>
								<option>Kimia</option>
							  </select>
							</div>
						</div>
						
						<div class="control-group">
						<label class="control-label" for="judul_tugas">Judul Tugas</label>
							<div class="controls">
							<input type="text" placeholder="Judul Tugas...">
							</div>
						</div>
						
						<div class="control-group">
						<label class="control-label" for="nama_tugas">Deadline Tugas</label>
							<div class="controls">
							<input class="input-small datepicker" type="text" placeholder="tanggal awal..." name="tgl-awal"> -
							<input class="input-small datepicker" type="text" placeholder="tanggal akhir...">
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="keterangan">Keterangan</label>
							<div class="controls">
								<textarea class="input-xlarge" id="keterangan" rows="3" name="keterangan"></textarea>
							</div>
						</div>
						
						<div class="control-group">
								<label class="control-label" for="fileInput">File Tugas</label>
									<div class="controls">
										<input name="userfile" class="input-file" id="fileInput" type="file">
									</div>
						</div>
							
						<div class="form-actions alert alert-info">
						<input type="submit" class="btn btn-primary"/>
						<a href="<?php echo site_url('guru/tugas'); ?>" class="btn btn-warning">Cancel</a>
						</div>
					</fieldset>
				</form>
			</article>
		</section>
	</div>
</div>