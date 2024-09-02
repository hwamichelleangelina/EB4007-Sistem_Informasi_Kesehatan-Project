<?php
require "koneksiDB.php";

$koneksiDB = mysqli_connect("localhost", "root", "", "websitepuskemas");

$rekam_medis = $_POST["rekam_medis"];
$nama_lengkap = $_POST["nama_lengkap"];

$sql1 = "SELECT * FROM daftarulang WHERE rekam_medis = '$rekam_medis'";

$result = mysqli_query($koneksiDB,$sql1);
$row=mysqli_fetch_array($result);

$result = $koneksiDB->query($sql1);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nik = $row["nik"];
        $tanggal_lahir = $row["tanggal_lahir"];
        $bpjs = $row["bpjs"];
        $poli_dituju = $row["poli_dituju"];
        $dokter_dituju = $row["dokter_dituju"];
        $tanggal_pemeriksaan = $row["tanggal_pemeriksaan"];
    }
}

$obat_1 = $_POST["obat_1"];
$jumlah_obat_1 = $_POST["jumlah_obat_1"];
$satuan_obat_1 = $_POST["satuan_obat_1"];

$obat_2 = $_POST["obat_2"];
$jumlah_obat_2 = $_POST["jumlah_obat_2"];
$satuan_obat_2 = $_POST["satuan_obat_2"];

$obat_3 = $_POST["obat_3"];
$jumlah_obat_3 = $_POST["jumlah_obat_3"];
$satuan_obat_3 = $_POST["satuan_obat_3"];

$obat_4 = $_POST["obat_4"];
$jumlah_obat_4 = $_POST["jumlah_obat_4"];
$satuan_obat_4 = $_POST["satuan_obat_4"];

$tanggal_ambil_obat = $_POST["tanggal_ambil_obat"];
$waktu_ambil_obat = $_POST["waktu_ambil_obat"];

$sql = mysqli_query($koneksiDB, "INSERT INTO pemberianobat (rekam_medis, nama_lengkap, nik, tanggal_lahir, bpjs, poli_dituju, dokter_dituju, tanggal_pemeriksaan, obat_1, jumlah_obat_1, satuan_obat_1, obat_2, jumlah_obat_2, satuan_obat_2,
obat_3, jumlah_obat_3, satuan_obat_3, obat_4, jumlah_obat_4, satuan_obat_4, tanggal_ambil_obat, waktu_ambil_obat) 
VALUES ('".$rekam_medis."', '".$nama_lengkap."', '".$nik."', '".$tanggal_lahir."', '".$bpjs."', '".$poli_dituju."', '".$dokter_dituju."', '".$tanggal_pemeriksaan."', '".$obat_1."', '".$jumlah_obat_1."', '".$satuan_obat_1."', '".$obat_2."', '".$jumlah_obat_2."', '".$satuan_obat_2."',  
'".$obat_3."', '".$jumlah_obat_3."', '".$satuan_obat_3."', '".$obat_4."', '".$jumlah_obat_4."', '".$satuan_obat_4."', '".$tanggal_ambil_obat."', '".$waktu_ambil_obat."')");

$updateobat1 = mysqli_query($koneksiDB, "SELECT stok FROM persediaanobat WHERE nama_obat='$obat_1'");
$row = $updateobat1 -> fetch_assoc();
$sisastok1 = ((int) $row["stok"]) - ((int) $jumlah_obat_1);
$sql1 = mysqli_query($koneksiDB, "UPDATE persediaanobat SET stok='$sisastok1' WHERE nama_obat='$obat_1'");

$updateobat2 = mysqli_query($koneksiDB, "SELECT stok FROM persediaanobat WHERE nama_obat='$obat_2'");
$row = $updateobat2 -> fetch_assoc();
$sisastok2 = ((int) $row["stok"]) - ((int) $jumlah_obat_2);
$sql2 = mysqli_query($koneksiDB, "UPDATE persediaanobat SET stok='$sisastok2' WHERE nama_obat='$obat_2'");

$updateobat3 = mysqli_query($koneksiDB, "SELECT stok FROM persediaanobat WHERE nama_obat='$obat_3'");
$row = $updateobat3 -> fetch_assoc();
$sisastok3 = ((int) $row["stok"]) - ((int) $jumlah_obat_3);
$sql3 = mysqli_query($koneksiDB, "UPDATE persediaanobat SET stok='$sisastok3' WHERE nama_obat='$obat_3'");

$updateobat4 = mysqli_query($koneksiDB, "SELECT stok FROM persediaanobat WHERE nama_obat='$obat_4'");
$row = $updateobat4 -> fetch_assoc();
$sisastok4 = ((int) $row["stok"]) - ((int) $jumlah_obat_4);
$sql4 = mysqli_query($koneksiDB, "UPDATE persediaanobat SET stok='$sisastok4' WHERE nama_obat='$obat_4'");

header('Location: menufarmasi.html');
exit;
?>