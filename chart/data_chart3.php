<?php
include(".../koneksi.php");

$laki_lolos=mysql_num_rows(mysql_query("SELECT * FROM tb_calon_siswa WHERE jk='l' AND status='1'"));
if ($laki_lolos > 0) {
	$laki_lolos_hasil=$laki_lolos;
	}
else{
	$laki_lolos_hasil="0";
	}
$perempuan_lolos=mysql_num_rows(mysql_query("SELECT * FROM tb_calon_siswa WHERE jk='p' AND status='1'"));
if ($perempuan_lolos > 0) {
	$perempuan_lolos_hasil=$perempuan_lolos;
	}
else{
	$perempuan_lolos_hasil="0";
	}


$array = Array (
    "0" => Array (
        label => "Laki - laki",
        value => $laki_lolos_hasil,
    ),
    "1" => Array (
        label => "Perempuan",
        value => $perempuan_lolos_hasil,
    ),
);

// encode array to json
echo json_encode($array);


?>