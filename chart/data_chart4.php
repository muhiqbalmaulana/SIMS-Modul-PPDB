<?php
include(".../koneksi.php");

$lolos=mysql_num_rows(mysql_query("SELECT * FROM tb_calon_siswa WHERE status='l'"));
if ($lolos > 0) {
	$lolos_hasil=$lolos;
	}
else{
	$lolos_hasil="0";	
	}
$gagal=mysql_num_rows(mysql_query("SELECT * FROM tb_calon_siswa WHERE status='0'"));
if ($gagal > 0) {
	$gagal_hasil=$gagal;
	}
else{
	$gagal_hasil_sql=mysql_num_rows(mysql_query("SELECT * FROM tb_calon_siswa"));
	$gagal_hasil = $gagal_hasil_sql - $lolos_hasil;
	}


$array = Array (
    "0" => Array (
        label => "Lolos",
        value => $lolos_hasil,
    ),
    "1" => Array (
        label => "Gagal",
        value => $gagal_hasil,
    ),
);

// encode array to json
echo json_encode($array);


?>