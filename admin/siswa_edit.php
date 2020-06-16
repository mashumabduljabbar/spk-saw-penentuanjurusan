		<div id="content">

		<!-- Page title -->
			<div class="page-title">
				<h5><i class="fa fa-users"></i> Halaman Edit Calon Siswa</h5>
			</div>
			<!-- /page title -->
<?php
$id_siswa = $_GET['id_siswa'];
$query = mysql_query("select * from calonsiswa where id_siswa='$id_siswa'");
$dataku = mysql_fetch_array($query);
?>
			<!-- Right labels -->
			<form class="form-horizontal" action="?spk=Siswa_Edit" method="post" role="form">
				<div class="panel panel-default">
					<div class="panel-heading"><h6 class="panel-title">Edit Calon Siswa</h6></div>
					<div class="panel-body">

						<div class="form-group">
							<label class="col-sm-3 control-label text-right">Id Calon Siswa</label>
							<div class="col-sm-9">
								<input type="text" name="id_siswa" value="<?php echo $dataku['id_siswa']; ?>" class="form-control" readonly >
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label text-right">Nama Calon Siswa</label>
							<div class="col-sm-9">
								<input type="text" name="nama_siswa" value="<?php echo $dataku['nama_siswa']; ?>" required class="form-control">
							</div>
						</div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-right">Nama Asal Sekolah</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_asal_sekolah" value="<?php echo $dataku['nama_asal_sekolah']; ?>" required class="form-control">
                            </div>
                        </div>
						<!--
						<div class="form-group">
							<label class="col-sm-3 control-label text-right">Jurusan</label>
							<div class="col-sm-3">
								<?php 
									$query_data_jurusan = mysql_fetch_array(mysql_query("select * from jurusan where kode_jurusan='$dataku[jurusan]'"));
									?>
								<select name="jurusan" class="required select">
									<?php 
									echo "<option value='$query_data_jurusan[kode_jurusan]'>$query_data_jurusan[nama_jurusan]</option>";
									$query_jurusan = mysql_query("select * from jurusan where kode_jurusan!='$query_data_jurusan[kode_jurusan]'");
									while($data_jurusan = mysql_fetch_array($query_jurusan)){
										echo "<option value='$data_jurusan[kode_jurusan]'>$data_jurusan[nama_jurusan]</option>";
									}
									?>
								</select>
							</div>
						</div>
						-->

					<div class="form-action text-right">
						<input type="submit" name="ubah" value="Ubah" class="btn btn-primary">
						<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
					</div>

				</div>
			</div>
			</form>
	</div>
<?php
if (isset($_POST['ubah'])) {
	$id_siswa = $_POST['id_siswa'];
	$nama_siswa = $_POST['nama_siswa'];
	$nama_asal_sekolah	= $_POST['nama_asal_sekolah'];

	$query=mysql_query("UPDATE calonsiswa SET nama_siswa='$nama_siswa', nama_asal_sekolah='$nama_asal_sekolah' WHERE id_siswa='$id_siswa'") or die(mysql_error());
	if ($query) {
		echo "<script>window.alert('Calon Siswa berhasil diubah');
				window.location=(href='?spk=Siswa')</script>";
	}}
?>