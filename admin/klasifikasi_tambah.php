<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
	<div id="content">
		<!-- Page title -->
			<div class="page-title">
				<h5><i class="fa fa-tag"></i> Halaman Tambah Klasifikasi</h5>
			</div>
            <form class="form-horizontal" action="?spk=Klasifikasi_Tambah" method="post" role="form">
                <div class="panel panel-default">
                    <div class="panel-heading"><h6 class="panel-title">Tambah Klasifikasi</h6></div>
                    <div class="panel-body">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-5 control-label" style="text-align:right;">Nama Calon Siswa</label>
								<div class="col-sm-7">
									<select name='id_siswa' data-placeholder="Pilih Calon Siswa..." class="chosen select" style="width:200px;">
										<option></option>
										<?php
										$query = "SELECT * FROM calonsiswa order by nama_siswa asc";
										$hasil = mysql_query($query);
										while ($data = mysql_fetch_array($hasil)) 
										{
											echo "<option value='".$data['id_siswa']."'>".$data['nama_siswa']." - ".$data['nama_asal_sekolah']."</option>";
										}
										?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-5 control-label" style="text-align:right;">Nilai Matematika</label>
								<div class="col-sm-7">
									<select name='nilai_matematika' data-placeholder="Pilih Nilai Matematika..." class="chosen select" style="width:200px;">
										<option></option>
										<?php
										$query = "SELECT * FROM himpunan where id_kriteria='1' order by id_himpunan asc";
										$hasil = mysql_query($query);
										while ($data = mysql_fetch_array($hasil)) 
										{
											echo "<option value='".$data['nilai']."'>".$data['namahimpunan']."</option>";
										}
										?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-5 control-label" style="text-align:right;">Nilai Bahasa Indonesia</label>
								<div class="col-sm-7">
									<select name='nilai_bahasaindonesia' data-placeholder="Pilih Nilai Bahasa Indonesia..." class="chosen select" style="width:200px;">
										<option></option>
										<?php
										$query = "SELECT * FROM himpunan where id_kriteria='2' order by id_himpunan asc";
										$hasil = mysql_query($query);
										while ($data = mysql_fetch_array($hasil)) 
										{
											echo "<option value='".$data['nilai']."'>".$data['namahimpunan']."</option>";
										}
										?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-5 control-label" style="text-align:right;">Nilai Bahasa Inggris</label>
								<div class="col-sm-7">
									<select name='nilai_bahasainggris' data-placeholder="Pilih Nilai Bahasa Inggris..." class="chosen select" style="width:200px;">
										<option></option>
										<?php
											$query = "SELECT * FROM himpunan where id_kriteria='3' order by id_himpunan asc";
											$hasil = mysql_query($query);
											while ($data = mysql_fetch_array($hasil)) 
											{
												echo "<option value='".$data['nilai']."'>".$data['namahimpunan']."</option>";
											}
										?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-5 control-label" style="text-align:right;">Nilai IPA</label>
								<div class="col-sm-7">
									<select name="nilai_ipa" data-placeholder="Pilih Nilai IPA..." class="chosen select" style="width:200px;">
										<option></option>
										<?php
											$query = "SELECT * FROM himpunan where id_kriteria='4' order by id_himpunan asc";
											$hasil = mysql_query($query);
											while ($data = mysql_fetch_array($hasil)) 
											{
												echo "<option value='".$data['nilai']."'>".$data['namahimpunan']."</option>";
											}
										?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-5 control-label" style="text-align:right;">Nilai TIK</label>
								<div class="col-sm-7">
									<select name='nilai_tik' data-placeholder="Pilih Nilai TIK..." class="chosen select" style="width:200px;">
										<option></option>
										<?php
											$query = "SELECT * FROM himpunan where id_kriteria='5' order by id_himpunan asc";
											$hasil = mysql_query($query);
											while ($data = mysql_fetch_array($hasil)) 
											{
												echo "<option value='".$data['nilai']."'>".$data['namahimpunan']."</option>";
											}
										?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-6">

							<div class="form-group">
								<label class="col-sm-5 control-label" style="text-align:right;">Minat TKJ</label>
								<div class="col-sm-7">
									<select name='minat_tkj' data-placeholder="Pilih Minat TKJ..." class="chosen select" style="width:200px;">
										<option></option>
										<?php
										$query = "SELECT * FROM himpunan where id_kriteria='6' order by id_himpunan asc";
										$hasil = mysql_query($query);
										while ($data = mysql_fetch_array($hasil)) 
										{
											echo "<option value='".$data['nilai']."'>".$data['namahimpunan']."</option>";
										}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5 control-label" style="text-align:right;">Minat TAV</label>
								<div class="col-sm-7">
									<select name='minat_tav' data-placeholder="Pilih Minat TAV..." class="chosen select" style="width:200px;">
										<option></option>
										<?php
										$query = "SELECT * FROM himpunan where id_kriteria='7' order by id_himpunan asc";
										$hasil = mysql_query($query);
										while ($data = mysql_fetch_array($hasil)) 
										{
											echo "<option value='".$data['nilai']."'>".$data['namahimpunan']."</option>";
										}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5 control-label" style="text-align:right;">Minat TAB</label>
								<div class="col-sm-7">
									<select name='minat_tab' data-placeholder="Pilih Minat TAB..." class="chosen select" style="width:200px;">
										<option></option>
										<?php
										$query = "SELECT * FROM himpunan where id_kriteria='8' order by id_himpunan asc";
										$hasil = mysql_query($query);
										while ($data = mysql_fetch_array($hasil)) 
										{
											echo "<option value='".$data['nilai']."'>".$data['namahimpunan']."</option>";
										}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5 control-label" style="text-align:right;">Minat TITL</label>
								<div class="col-sm-7">
									<select name='minat_titl' data-placeholder="Pilih Minat TITL..." class="chosen select" style="width:200px;">
										<option></option>
										<?php
										$query = "SELECT * FROM himpunan where id_kriteria='8' order by id_himpunan asc";
										$hasil = mysql_query($query);
										while ($data = mysql_fetch_array($hasil)) 
										{
											echo "<option value='".$data['nilai']."'>".$data['namahimpunan']."</option>";
										}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5 control-label"></label>
								<div class="col-sm-7"  style="text-align:left;">
									<div class="form-action">
										<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
										<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
<script type="text/javascript">
      $(".chosen").chosen();
</script>
<?php
if (isset($_POST['simpan'])) {
    $id_siswa     = $_POST['id_siswa'];
    $nilai_matematika = $_POST['nilai_matematika'];
    $nilai_bahasaindonesia  = $_POST['nilai_bahasaindonesia'];
    $nilai_bahasainggris = $_POST['nilai_bahasainggris'];
    $nilai_ipa   = $_POST['nilai_ipa'];
    $nilai_tik       = $_POST['nilai_tik'];
    $minat_tkj       = $_POST['minat_tkj'];
    $minat_tav       = $_POST['minat_tav'];
    $minat_tab       = $_POST['minat_tab'];
    $minat_titl       = $_POST['minat_titl'];

    $sql = "insert into klasifikasi values
    ('','$id_siswa','$nilai_matematika','$nilai_bahasaindonesia','$nilai_bahasainggris','$nilai_ipa','$nilai_tik','$minat_tkj','$minat_tav','$minat_tab','$minat_titl')";
    $query = mysql_query($sql) or die(mysql_error());
    if ($query) {        
    echo "<script>window.alert('Klasifikasi berhasil di tambah');
            window.location=(href='?spk=Klasifikasi')</script>";
    }}
?>