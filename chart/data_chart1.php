<?php
include(".../koneksi.php");

$dlm_kota=mysql_num_rows(mysql_query("SELECT * FROM tb_calon_siswa WHERE opt_kota='dk'"));
$luar_kota=mysql_num_rows(mysql_query("SELECT * FROM tb_calon_siswa WHERE opt_kota='lk'"));


$array = Array (
    "0" => Array (
        label => "Malang Raya",
        value => $dlm_kota,
    ),
    "1" => Array (
        label => "Non - Malang Raya",
        value => $luar_kota,
    ),
);

// encode array to json
echo json_encode($array);


?>