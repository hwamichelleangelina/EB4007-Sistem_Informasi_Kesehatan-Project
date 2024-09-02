<?php
require "koneksiDB.php";

$koneksiDB = mysqli_connect("localhost", "root", "", "websitepuskemas");

$rekam_medis = $_POST["rekam_medis"];
$nama_lengkap = $_POST["nama_lengkap"];
$nik = $_POST["nik"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$bpjs = $_POST["bpjs"];
$poli_dituju = $_POST["poli_dituju"];
$dokter_dituju = $_POST["dokter_dituju"];
$tanggal_pemeriksaan = $_POST["tanggal_pemeriksaan"];
$waktu_pemeriksaan = $_POST["waktu_pemeriksaan"];
$keluhan_pasien = $_POST["keluhan_pasien"];

$sql = mysqli_query($koneksiDB, "INSERT INTO daftarulang (rekam_medis, nama_lengkap, nik, tanggal_lahir, bpjs, poli_dituju, dokter_dituju, tanggal_pemeriksaan, waktu_pemeriksaan, keluhan_pasien) VALUES ('".$rekam_medis."', '".$nama_lengkap."', '".$nik."', '".$tanggal_lahir."', '".$bpjs."', '".$poli_dituju."', '".$dokter_dituju."', '".$tanggal_pemeriksaan."', '".$waktu_pemeriksaan."', '".$keluhan_pasien."')");

echo "Pendaftaran Anda telah berhasil";
 ?>