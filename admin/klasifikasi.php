<style>
th.rotate {
  /* Something you can count on */
  height: 140px;
  white-space: nowrap;
}

th.rotate > div {
  transform: 
    /* Magic Numbers */
    translate(25px, 51px)
    /* 45 is really 360 - 45 */
    rotate(270deg);
  width: 10px;
}
th.rotate > div > span {
  border-bottom: 1px solid #ccc;
  padding: 5px 10px;
}
</style>
	<div id="content">
		<!-- Page title -->
			<div class="page-title">
				<h5><i class="fa fa-tag"></i> Halaman Klasifikasi</h5>
			</div>

			<!-- /page title -->
			
			<!-- Hover rows datatable inside panel -->
			<div class="panel panel-default">
				<div class="panel-heading" align="right"><h6 class="panel-title"><i class="fa fa-tag"></i> Data Klasifikasi</h6>
				<a href="?spk=Klasifikasi_Tambah"><input type="submit" value="Tambah Klasifikasi" class="btn btn-info"></a>
				</div>
				<div class="datatable">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th class='rotate'><div><span>No</span></div></th>
								<th class='rotate'><div><span>Alternatif</span></div></th>
								<th class='rotate'><div><span>Matematika</span></div></th>
								<th class='rotate'><div><span>B. Indonesia</span></div></th>
								<th class='rotate'><div><span>B. Inggris</span></div></th>
								<th class='rotate'><div><span>IPA</span></div></th>
								<th class='rotate'><div><span>TIK</span></div></th>
								<th class='rotate'><div><span>Minat TKJ</span></div></th>
								<th class='rotate'><div><span>Minat TAV</span></div></th>
								<th class='rotate'><div><span>Minat TAB</span></div></th>
								<th class='rotate'><div><span>Minat TITL</span></div></th>
							</tr>
						</thead>
						<tbody>
						<?php
						$nomor = 0;
						$hasil = mysql_query("select * from klasifikasi, calonsiswa where klasifikasi.id_siswa=calonsiswa.id_siswa");
						while ($dataku = mysql_fetch_array($hasil)) {
						?>
							<tr>
								<td><?php echo $nomor=$nomor+1;?></td>
								<td><?php echo $dataku['nama_siswa']; ?></td>
								<td><?php echo $dataku['nilai_matematika']; ?></td>
								<td><?php echo $dataku['nilai_bahasaindonesia']; ?></td>
								<td><?php echo $dataku['nilai_bahasainggris']; ?></td>
								<td><?php echo $dataku['nilai_ipa']; ?></td>
								<td><?php echo $dataku['nilai_tik']; ?></td>
								<td><?php echo $dataku['minat_tkj']; ?></td>
								<td><?php echo $dataku['minat_tav']; ?></td>
								<td><?php echo $dataku['minat_tab']; ?></td>
								<td><?php echo $dataku['minat_titl']; ?></td>
							</tr>
						<?php }	?>
						</tbody>
					</table>
				</div>
			</div>
		</div>	