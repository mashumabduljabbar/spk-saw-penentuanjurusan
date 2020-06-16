		<div id="content">
		<!-- Page title -->
			<div class="page-title">
				<h5><i class="fa fa-bookmark"></i> Halaman Himpunan Kriteria</h5>
			</div>

			<!-- /page title -->

			<!-- Hover rows datatable inside panel -->
			<div class="panel panel-default">
				<div class="panel-heading" align="right"><h6 class="panel-title"><i class="fa fa-bookmark"></i> Data Himpunan Kriteria</h6>
				<a href="?spk=Himpunan_Tambah"><input type="submit" value="Tambah Himpunan" class="btn btn-info"></a>
				</div>
				<div class="datatable">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Kriteria</th>
								<th>Nama Himpunan</th>
								<th>Nilai</th>
								<th>Keterangan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$nomor = 1;
						$hasil = mysql_query("SELECT * FROM himpunan, kriteria where himpunan.id_kriteria=kriteria.id_kriteria order by himpunan.id_himpunan asc");
						while ($dataku = mysql_fetch_array($hasil)) {
						?>
							<tr>
								<td><?php echo $nomor;?></td>
								<td><?php echo $dataku['namakriteria']; ?></td>
								<td><?php echo $dataku['namahimpunan']; ?></td>
								<td><?php echo $dataku['nilai']; ?></td>
								<td><?php echo $dataku['keterangan']; ?></td>
								<td>
									<a href="?spk=Himpunan_Edit&id_himpunan=<?php echo $dataku['id_himpunan']; ?>">
									<i class='fa fa-edit'></i>
									</a>
									<a href="?spk=Himpunan_Hapus&id_himpunan=<?php echo $dataku['id_himpunan']; ?>">
									<i class='fa fa-eraser'></i>
									</a>
								</td>
							</tr>
						<?php 
						$nomor++;
						}	?>
						</tbody>
					</table>
				</div>
			</div>
		</div>