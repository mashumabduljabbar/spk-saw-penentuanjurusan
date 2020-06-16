<?php
include "../inc/koneksi.php";
include "../cek-login.php";

$term = $_GET['term'];

$query = mysql_query("select * from calonsiswa where nama_siswa like '%".$term."%'");
$json = array();
while ($ketik = mysql_fetch_array($query)) {
	$json[] = array(
		'label' => $ketik['nama_siswa'], // text sugesti sat user mengetik di input box
		'value' => $ketik['nama_siswa'], // nilai yang akan di masukan di inputbox saat user memilih salah satu sugesti
		'id_siswa' => $ketik['id_siswa']
		);
}
header("Content-Type: text/json");
echo json_encode($json);
?>