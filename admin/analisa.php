<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<style>
th.rotate_klasifikasi {
  /* Something you can count on */
  height: 240px;
  white-space: nowrap;
}

th.rotate_klasifikasi > div {
  transform: 
    /* Magic Numbers */
    translate(25px, 100px)
    /* 45 is really 360 - 45 */
    rotate(270deg);
  width: 10px;
}
th.rotate_klasifikasi > div > span {
  border-bottom: 1px solid #ccc;
  padding: 5px 10px;
}

th.rotate_normalisasi {
  /* Something you can count on */
  height: 180px;
  white-space: nowrap;
}

th.rotate_normalisasi > div {
  transform: 
    /* Magic Numbers */
    translate(25px, 75px)
    /* 45 is really 360 - 45 */
    rotate(270deg);
  width: 10px;
}
th.rotate_normalisasi > div > span {
  border-bottom: 1px solid #ccc;
  padding: 5px 10px;
}


</style>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />	
		<div id="content">
		<!-- Page title -->
			<div class="page-title">
				<table style="color:white;" width="100%">
				<tr>
					<td style="text-align:left;"><h5><i class="fa fa-pencil"></i> Halaman Hasil Analisa</h5></td>
					<td style="text-align:right;"><a onclick="printDiv('printableArea')"><i class="fa fa-print"></i> Cetak</a>&nbsp;&nbsp;&nbsp;</td>
				</tr>
				</table>
			</div>
			<!-- /page title -->
		<div id="printableArea">
			<!-- Hover rows datatable inside panel -->
            <div class="panel panel-default">
            	<div class="panel-heading"><h6 class="panel-title">
            				<tr align="right">
            					<th>KLASIFIKASI</th>
            				</tr>
            	</h6></div>
            	<div class="">
            		<table class="table table-bordered table-hover" border="1" cellpadding="3">
            			<thead>
            				<tr>
            					<th class='rotate_klasifikasi'><div><span>No</span></div></th>
            					<th class='rotate_klasifikasi'><div><span>Alternatif</span></div></th>
            					<th class='rotate_klasifikasi'><div><span>C1. Matematika (Benefit)</span></div></th>
            					<th class='rotate_klasifikasi'><div><span>C2. B. Indonesia (Benefit)</span></div></th>
            					<th class='rotate_klasifikasi'><div><span>C3. B. Inggris (Benefit)</span></div></th>
            					<th class='rotate_klasifikasi'><div><span>C4. IPA (Benefit)</span></div></th>
            					<th class='rotate_klasifikasi'><div><span>C5. TIK (Benefit)</span></div></th>           					
            					<th class='rotate_klasifikasi'><div><span>C6. Minat TKJ (Cost)</span></div></th>        					
            					<th class='rotate_klasifikasi'><div><span>C7. Minat TAV (Cost)</span></div></th>            					
            					<th class='rotate_klasifikasi'><div><span>C8. Minat TAB (Cost)</span></div></th>          					
            					<th class='rotate_klasifikasi'><div><span>C9. Minat TITL (Cost)</span></div></th>         					
            				</tr>
            			</thead>
            			<tbody>
            				<?php
            				$nomor = 1;
            				$query_klasifikasi = mysql_query("select * from klasifikasi, calonsiswa where klasifikasi.id_siswa=calonsiswa.id_siswa");
            				while ($data_klasifikasi = mysql_fetch_array($query_klasifikasi)) {
            				?>
            				<tr>
            					<td><?php echo $nomor; ?></td>
            					<td><?php echo $data_klasifikasi['nama_siswa']; ?></td>
            					<td><?php echo $data_klasifikasi['nilai_matematika']; ?></td>
            					<td><?php echo $data_klasifikasi['nilai_bahasaindonesia']; ?></td>
            					<td><?php echo $data_klasifikasi['nilai_bahasainggris']; ?></td>
            					<td><?php echo $data_klasifikasi['nilai_ipa']; ?></td>
            					<td><?php echo $data_klasifikasi['nilai_tik']; ?></td>
            					<td><?php echo $data_klasifikasi['minat_tkj']; ?></td>
            					<td><?php echo $data_klasifikasi['minat_tav']; ?></td>
            					<td><?php echo $data_klasifikasi['minat_tab']; ?></td>
            					<td><?php echo $data_klasifikasi['minat_titl']; ?></td>
            				</tr>
            				<?php
							$nomor++;
							}	?>            				
            			</tbody>
            		</table>
            	</div>
            </div>  
			<!-- Hover rows datatable inside panel -->
<?php
$query_data_max = mysql_fetch_array(mysql_query("
SELECT 
max(nilai_matematika) as max1,
max(nilai_bahasaindonesia) as max2,
max(nilai_bahasainggris) as max3,
max(nilai_ipa) as max4,
max(nilai_tik) as max5,
max(minat_tkj) as max6,
max(minat_tav) as max7,
max(minat_tab) as max8,
max(minat_titl) as max9
FROM klasifikasi
"));
?>			
            <div class="panel panel-default">
            	<div class="panel-heading"><h6 class="panel-title">
            				<tr align="right">
            					<th>NORMALISASI</th>
            				</tr>
            	</h6></div>
            	<div class="">
            		<table class="table table-bordered table-hover" border="1" cellpadding="3">
            			<thead>
            				<tr>
            					<th class='rotate_normalisasi'><div><span>No</span></div></th>
            					<th class='rotate_normalisasi'><div><span>Alternatif</span></div></th>
            					<th class='rotate_normalisasi'><div><span>C1. Matematika</span></div></th>
            					<th class='rotate_normalisasi'><div><span>C2. B. Indonesia</span></div></th>
            					<th class='rotate_normalisasi'><div><span>C3. B. Inggris</span></div></th>
            					<th class='rotate_normalisasi'><div><span>C4. IPA</span></div></th>
            					<th class='rotate_normalisasi'><div><span>C5. TIK</span></div></th>           					
            					<th class='rotate_normalisasi'><div><span>C6. Minat TKJ</span></div></th>        					
            					<th class='rotate_normalisasi'><div><span>C7. Minat TAV</span></div></th>            					
            					<th class='rotate_normalisasi'><div><span>C8. Minat TAB</span></div></th>          					
            					<th class='rotate_normalisasi'><div><span>C9. Minat TITL</span></div></th>         					
            				</tr>
            			</thead>
            			<tbody>
            				<?php
            				$nomor = 1;
            				$query_normalisasi = mysql_query("select * from klasifikasi, calonsiswa where klasifikasi.id_siswa=calonsiswa.id_siswa");
            				while ($data_normalisasi = mysql_fetch_array($query_normalisasi)) {
            				?>
            				<tr>
            					<td><?php echo $nomor; ?></td>
            					<td><?php echo $data_normalisasi['nama_siswa']; ?></td>
            					<td><?php echo round($data_normalisasi['nilai_matematika']/$query_data_max['max1'],2); ?></td>
            					<td><?php echo round($data_normalisasi['nilai_bahasaindonesia']/$query_data_max['max2'],2); ?></td>
            					<td><?php echo round($data_normalisasi['nilai_bahasainggris']/$query_data_max['max3'],2); ?></td>
            					<td><?php echo round($data_normalisasi['nilai_ipa']/$query_data_max['max4'],2); ?></td>
            					<td><?php echo round($data_normalisasi['nilai_tik']/$query_data_max['max5'],2); ?></td>
            					<td><?php echo round($data_normalisasi['minat_tkj']/$query_data_max['max6'],2); ?></td>
            					<td><?php echo round($data_normalisasi['minat_tav']/$query_data_max['max7'],2); ?></td>
            					<td><?php echo round($data_normalisasi['minat_tab']/$query_data_max['max8'],2); ?></td>
            					<td><?php echo round($data_normalisasi['minat_titl']/$query_data_max['max9'],2); ?></td>
            				</tr>
            				<?php
							$nomor++;
							}	?>            				
            			</tbody>
            		</table>
            	</div>
            </div>                     				

            <div class="panel panel-default">
            	<div class="panel-heading"><h6 class="panel-title">
            				<tr align="right">
            					<th>NILAI PREFENSI</th>
            				</tr>
            	</h6></div>
            	<div class="">
            		<table class="table table-bordered table-hover" border="1" cellpadding="3">
            			<thead>
							<tr> 
            					<th rowspan='2' style="text-align:center; vertical-align:middle;">No</th>
            					<th rowspan='2' style="text-align:center; vertical-align:middle;">ALTERNATIF</th>						
            					<th colspan='4' style="text-align:center; vertical-align:middle;">JURUSAN</th>           					
            					<th rowspan='2' style="text-align:center; vertical-align:middle;">REKOMENDASI JURUSAN</th>      					
            				</tr>
            				<tr>		
            					<th style="text-align:center; vertical-align:middle;">TKJ</th>        					
            					<th style="text-align:center; vertical-align:middle;">TAV</th>            					
            					<th style="text-align:center; vertical-align:middle;">TAB</th>          					
            					<th style="text-align:center; vertical-align:middle;">TITL</th>       					
            				</tr>
            			</thead>
            			<tbody>
            				<?php
            				$nomor = 1;
            				$query_nilai_prefensi = mysql_query("select * from klasifikasi, calonsiswa where klasifikasi.id_siswa=calonsiswa.id_siswa");
            				while ($data_nilai_prefensi = mysql_fetch_array($query_nilai_prefensi)) {
							$c1 = $data_nilai_prefensi['nilai_matematika']/$query_data_max['max1'];
							$c2 = $data_nilai_prefensi['nilai_bahasaindonesia']/$query_data_max['max2'];
							$c3 = $data_nilai_prefensi['nilai_bahasainggris']/$query_data_max['max3'];
							$c4 = $data_nilai_prefensi['nilai_ipa']/$query_data_max['max4'];
							$c5 = $data_nilai_prefensi['nilai_tik']/$query_data_max['max5'];
							$c6 = $data_nilai_prefensi['minat_tkj']/$query_data_max['max6'];
							$c7 = $data_nilai_prefensi['minat_tav']/$query_data_max['max7'];
							$c8 = $data_nilai_prefensi['minat_tab']/$query_data_max['max8'];
							$c9 = $data_nilai_prefensi['minat_titl']/$query_data_max['max9'];	
							?>
							<tr>
            					<td><?php echo $nomor; ?></td>
            					<td><?php echo $data_nilai_prefensi['nama_siswa']; ?></td>	
            				<?php $query_bobot = mysql_query("select kode_jurusan, ((c1*$c1)+(c2*$c2)+(c3*$c3)+(c4*$c4)+(c5*$c5)+(c6*$c6)+(c7*$c7)+(c8*$c8)+(c9*$c9)) 
							as nilai from kriteria_bobot");
							while ($data_bobot = mysql_fetch_array($query_bobot)) { ?>
								<td><?php echo round($data_bobot['nilai'],2);?></td>
							<?php } ?>
								<td>
								<?php 
								$query_bobot_max = mysql_fetch_array(mysql_query("select kode_jurusan, ((c1*$c1)+(c2*$c2)+(c3*$c3)+(c4*$c4)+(c5*$c5)+(c6*$c6)+(c7*$c7)+(c8*$c8)+(c9*$c9)) 
								as nilai from kriteria_bobot order by nilai DESC limit 1"));
								
								$query_data_jurusan = mysql_fetch_array(mysql_query("select * from jurusan where kode_jurusan='$query_bobot_max[kode_jurusan]'"));
								echo $query_data_jurusan['nama_jurusan'];
								?>
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
	</div>
<script>  
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>