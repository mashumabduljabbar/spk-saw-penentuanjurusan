<?php
$server = "localhost";
$username = "mule7148_spk_jurusan_saw";
$password = "spk_jurusan_saw";
$database = "mule7148_spk_jurusan_saw";
$konek = mysql_connect($server, $username, $password) or die("Gagal konek ke server MySQL" .mysql_error());
$bukadb = mysql_select_db($database) or die("Gagal membuka database $database" .mysql_error());
?>