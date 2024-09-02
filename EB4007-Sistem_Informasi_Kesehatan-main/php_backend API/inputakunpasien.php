<?php

require "koneksiDB.php";

$koneksiDB = mysqli_connect("localhost", "root", "", "websitepuskemas");

$nama_lengkap = $_POST["nama_lengkap"];
$nik = $_POST["nik"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$usia = $_POST["usia"];
$tempat_tinggal = $_POST["tempat_tinggal"];
$bpjs = $_POST["bpjs"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$golongan_darah = $_POST["golongan_darah"];
$pekerjaan = $_POST["pekerjaan"];
$nomor_telepon = $_POST["nomor_telepon"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = hash("sha256", $_POST["password"]);

if (!$koneksiDB)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

else {
    $sql = mysqli_query($koneksiDB, "INSERT INTO akunpasien (nama_lengkap, nik, tanggal_lahir, usia, tempat_tinggal, bpjs, jenis_kelamin, golongan_darah, pekerjaan, nomor_telepon, email, username, password) VALUES ('".$nama_lengkap."', '".$nik."', '".$tanggal_lahir."', '".$usia."', '".$tempat_tinggal."', '".$bpjs."', '".$jenis_kelamin."', '".$golongan_darah."', '".$pekerjaan."', '".$nomor_telepon."', '".$email."', '".$username."', '".$password."')");
    header('Location: registrasiberhasil.html');
    exit;
}
?>



