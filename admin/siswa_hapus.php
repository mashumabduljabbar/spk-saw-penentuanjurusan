<?php
include '../inc/koneksi.php';

$id_siswa = $_GET['id_siswa'];
$query = mysql_query("delete from calonsiswa where id_siswa='$id_siswa'") or die(mysql_error());
$q = mysql_query("DELETE FROM klasifikasi WHERE id_siswa='$id_siswa'") or die(mysql_error());
if ($query) {
?>
<script language="JavaScript">
	alert('Data calon Siswa berhasil di hapus');
	document.location='?spk=Siswa';
</script>
<?php
}
?>