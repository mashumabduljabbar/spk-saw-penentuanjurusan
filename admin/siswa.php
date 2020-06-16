<div id="content">
		<!-- Page title -->
			<div class="page-title">
				<h5><i class="fa fa-users"></i> Halaman Calon Siswa</h5>
			</div>
			<!-- /page title -->

			<!-- Hover rows datatable inside panel -->
			<div class="panel panel-default">
				<div class="panel-heading" align="right"><h6 class="panel-title"><i class="fa fa-male"></i> Data Calon Siswa</h6>
				<a href="?spk=Siswa_Tambah"><input type="submit" value="Tambah Calon Siswa" class="btn btn-info"></a>
				</div>
				<div class="datatable">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Calon Siswa</th>
								<th>Asal Sekolah</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$nomor = 0;
							$hasil = mysql_query("select * from calonsiswa");
							while ($dataku = mysql_fetch_array($hasil)) {
							?>
								<tr>
									<td><?php echo $nomor=$nomor+1;?></td>
									<td><?php echo $dataku['nama_siswa']; ?></td>
									<td><?php echo $dataku['nama_asal_sekolah']; ?></td>
									
									<td>
										<a href="?spk=Siswa_Edit&id_siswa=<?php echo $dataku['id_siswa']; ?>">
										<i class='fa fa-edit'></i>
										</a>
										<a href="?spk=Siswa_Hapus&id_siswa=<?php echo $dataku['id_siswa']; ?>">
										<i class='fa fa-eraser'></i>
										</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
</div>
