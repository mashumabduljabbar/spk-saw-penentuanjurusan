<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

	switch($_GET['spk']){
	    case '':
			include("home.php");		
		break;
		case 'Home':
			include("home.php");		
		break;
		case 'Siswa':
			include("siswa.php");		
		break;
		case 'Siswa_Tambah':
			include("siswa_tambah.php");		
		break;
		case 'Siswa_Edit':
			include("siswa_edit.php");		
		break;
		case 'Siswa_Hapus':
			include("siswa_hapus.php");		
		break;
		case 'Kriteria':
			include("kriteria.php");		
		break;
		case 'Kriteria_Tambah':
			include("kriteria_tambah.php");		
		break;
		case 'Kriteria_Edit':
			include("kriteria_edit.php");		
		break;
		case 'Kriteria_Hapus':
			include("kriteria_hapus.php");		
		break;
		case 'Himpunan':
			include("himpunan.php");		
		break;
		case 'Himpunan_Tambah':
			include("himpunan_tambah.php");		
		break;
		case 'Himpunan_Edit':
			include("himpunan_edit.php");		
		break;ude("himpunan_tambah.php");		
		break;
		case 'Himpunan_Hapus':
			include("himpunan_hapus.php");		
		break;
		case 'Klasifikasi':
			include("klasifikasi.php");		
		break;
		case 'Klasifikasi_Tambah':
			include("klasifikasi_tambah.php");		
		break;
		case 'Analisa':
			include("analisa.php");		
		break;
	};
?>	