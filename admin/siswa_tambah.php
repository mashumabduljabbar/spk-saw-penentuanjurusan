		<div id="content">
		<!-- Page title -->
			<div class="page-title">
				<h5><i class="fa fa-users"></i> Halaman Tambah Calon Siswa</h5>
			</div>
			<!-- /page title -->

			<!-- Right labels -->
			<form class="form-horizontal" action="?spk=Siswa_Tambah" method="post" role="form">
                <div class="panel panel-default">
                    <div class="panel-heading"><h6 class="panel-title">Tambah Calon Siswa</h6></div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-right">Id Calon Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_siswa" class="form-control" value="<?php echo kdauto('calonsiswa','CPB-'); ?>" readonly="true" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-right">Nama Calon Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_siswa" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-right">Nama Asal Sekolah</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_asal_sekolah" required class="form-control">
                            </div>
                        </div>
						
						<!--
						<div class="form-group">
                            <label class="col-sm-3 control-label text-right">Jurusan</label>
                            <div class="col-sm-2">
								<select name="jurusan" data-placeholder="Pilih Jurusan..." class="required select">
									<option></option>
									<?php 
									$query_jurusan = mysql_query("select * from jurusan");
									while($data_jurusan = mysql_fetch_array($query_jurusan)){
										echo "<option value='$data_jurusan[kode_jurusan]'>$data_jurusan[nama_jurusan]</option>";
									}
									?>
								</select>
                            </div>
                        </div>
						-->

                        <div class="form-actions text-right">
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
                        </div>

                    </div>
                </div>
            </form>
</div>
<?php
if(isset($_POST['simpan'])){
	$id_siswa	= $_POST['id_siswa'];
	$nama_siswa	= $_POST['nama_siswa'];
	$nama_asal_sekolah	= $_POST['nama_asal_sekolah'];
	
	$sql="insert into calonsiswa values
	('$id_siswa','$nama_siswa','$nama_asal_sekolah')";
	$query= mysql_query($sql) or die(mysql_error());
	if($query) {
	echo "<script>window.alert('Calon Siswa berhasil ditambah');
            window.location=(href='?spk=Siswa')</script>";
	}}
?>		