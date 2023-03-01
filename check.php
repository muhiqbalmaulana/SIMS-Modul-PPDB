<?php
include ("koneksi.php");
if($_POST['id']){
$status = $_POST['status'];

mysql_query("UPDATE siswa SET status='$status'");
}
?>