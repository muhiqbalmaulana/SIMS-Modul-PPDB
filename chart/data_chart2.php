<?php
include(".../koneksi.php");

$laki=mysql_num_rows(mysql_query("SELECT * FROM tb_calon_siswa WHERE jk='l'"));
$perempuan=mysql_num_rows(mysql_query("SELECT * FROM tb_calon_siswa WHERE jk='p'"));


$array = Array (
    "0" => Array (
        label => "Laki - laki",
        value => $laki,
    ),
    "1" => Array (
        label => "Perempuan",
        value => $perempuan,
    ),
);

// encode array to json
echo json_encode($array);


?>