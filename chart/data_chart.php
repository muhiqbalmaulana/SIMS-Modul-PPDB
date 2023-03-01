<?php
include(".../koneksi.php");

$dlm_kota=mysql_num_rows(mysql_query("SELECT * FROM tb_calon_siswa WHERE opt_kota='dk'"));
$luar_kota=mysql_num_rows(mysql_query("SELECT * FROM tb_calon_siswa WHERE opt_kota='lk'"));
$laki=mysql_num_rows(mysql_query("SELECT * FROM tb_calon_siswa WHERE jk='l'"));
$perempuan=mysql_num_rows(mysql_query("SELECT * FROM tb_calon_siswa WHERE jk='p'"));

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

?>
