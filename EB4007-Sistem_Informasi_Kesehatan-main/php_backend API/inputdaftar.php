<?php
require "koneksiDB.php";

session_start();
$koneksiDB = mysqli_connect("localhost", "root", "", "websitepuskemas");

$username = $_SESSION['username'];
$sql1 = "SELECT * FROM akunpasien WHERE username = '$username'";

$result = mysqli_query($koneksiDB,$sql1);
$row=mysqli_fetch_array($result);

$result = $koneksiDB->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $rekam_medis = $row["rekam_medis"];
        $nama_lengkap = $row["nama_lengkap"];
        $nik = $row["nik"];
        $tanggal_lahir = $row["tanggal_lahir"];
        $bpjs = $row["bpjs"];
    }
}

$poli_dituju = $_POST["poli_dituju"];
$dokter_dituju = $_POST["dokter_dituju"];
$tanggal_pemeriksaan = $_POST["tanggal_pemeriksaan"];
$waktu_pemeriksaan = $_POST["waktu_pemeriksaan"];
$keluhan_pasien = $_POST["keluhan_pasien"];

$sql = mysqli_query($koneksiDB, "INSERT INTO daftarulang (rekam_medis, nama_lengkap, nik, tanggal_lahir, bpjs, poli_dituju, dokter_dituju, tanggal_pemeriksaan, waktu_pemeriksaan, keluhan_pasien)
    VALUES ('".$rekam_medis."', '".$nama_lengkap."', '".$nik."', '".$tanggal_lahir."', '".$bpjs."', '".$poli_dituju."', '".$dokter_dituju."', '".$tanggal_pemeriksaan."', '".$waktu_pemeriksaan."', '".$keluhan_pasien."')");

header('Location: menupasien.html');
exit;
 ?>