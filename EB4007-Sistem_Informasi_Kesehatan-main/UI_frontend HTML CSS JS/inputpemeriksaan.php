<?php
require "koneksiDB.php";

$koneksiDB = mysqli_connect("localhost", "root", "", "websitepuskemas");

$rekam_medis = $_POST["rekam_medis"];
$keluhan_pasien = $_POST["keluhan_pasien"];
$diagnosis = $_POST["diagnosis"];
$tindak_lanjut = $_POST["tindak_lanjut"];

$obat_1 = $_POST["obat_1"];
$jumlah_obat_1 = $_POST["jumlah_obat_1"];
$satuan_obat_1 = $_POST["satuan_obat_1"];
$pemakaian_obat_1 = $_POST["pemakaian_obat_1"];

$obat_2 = $_POST["obat_2"];
$jumlah_obat_2 = $_POST["jumlah_obat_2"];
$satuan_obat_2 = $_POST["satuan_obat_2"];
$pemakaian_obat_2 = $_POST["pemakaian_obat_2"];

$obat_3 = $_POST["obat_3"];
$jumlah_obat_3 = $_POST["jumlah_obat_3"];
$satuan_obat_3 = $_POST["satuan_obat_3"];
$pemakaian_obat_3 = $_POST["pemakaian_obat_3"];

$obat_4 = $_POST["obat_4"];
$jumlah_obat_4 = $_POST["jumlah_obat_4"];
$satuan_obat_4 = $_POST["satuan_obat_4"];
$pemakaian_obat_4 = $_POST["pemakaian_obat_4"];

$sql = mysqli_query($koneksiDB, "INSERT INTO pemeriksaandokter (rekam_medis, keluhan_pasien, diagnosis, tindak_lanjut, obat_1, jumlah_obat_1, satuan_obat_1, pemakaian_obat_1, obat_2, jumlah_obat_2, satuan_obat_2, pemakaian_obat_2, obat_3, jumlah_obat_3, satuan_obat_3, pemakaian_obat_3, obat_4, jumlah_obat_4, satuan_obat_4, pemakaian_obat_4)
VALUES ('".$rekam_medis."', '".$keluhan_pasien."', '".$diagnosis."', '".$tindak_lanjut."', '".$obat_1."', '".$jumlah_obat_1."', '".$satuan_obat_1."', '".$pemakaian_obat_1."', '".$obat_2."', '".$jumlah_obat_2."', '".$satuan_obat_2."', '".$pemakaian_obat_2."', 
'".$obat_3."', '".$jumlah_obat_3."', '".$satuan_obat_3."', '".$pemakaian_obat_3."', '".$obat_4."', '".$jumlah_obat_4."', '".$satuan_obat_4."', '".$pemakaian_obat_4."')");

header('Location: menudokter.html');
exit;

 ?>