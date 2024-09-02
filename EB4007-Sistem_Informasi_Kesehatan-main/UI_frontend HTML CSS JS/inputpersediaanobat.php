<?php
require "koneksiDB.php";

$koneksiDB = mysqli_connect("localhost", "root", "", "websitepuskemas");

$nama_obat_update = "";
$jenis_obat_update = "";
$tambah_stok = "";
$nama_obat = "";
$jenis_obat = "";
$produsen = "";
$satuan = "";
$isi = "";
$harga_beli = "";
$harga_satuan = "";
$harga_1_box = "";
$stok = "";

if(isset($_POST['act'])){
    if($_POST['act'] == 'adding'){
        //process form1
        $nama_obat = $_POST["nama_obat"];
        $jenis_obat = $_POST["jenis_obat"];
        $produsen = $_POST["produsen"];
        $satuan = $_POST["satuan"];
        $isi = $_POST["isi"];
        $harga_beli = $_POST["harga_beli"];
        $harga_satuan = $_POST["harga_satuan"];
        $harga_1_box = $_POST["harga_1_box"];
        $stok = $_POST["stok"];
    }else if($_POST['act'] == 'editing'){
        //process form2
        $nama_obat_update = $_POST["nama_obat_update"];
        $jenis_obat_update = $_POST["jenis_obat_update"];
        $tambah_stok = $_POST["tambah_stok"];
    }
}





if ($nama_obat != '' && $nama_obat_update == '') {
    $sql = mysqli_query($koneksiDB, "INSERT INTO persediaanobat (nama_obat, jenis_obat, produsen, satuan, isi, harga_beli, harga_satuan, harga_1_box, stok)
    VALUES ('" . $nama_obat . "', '" . $jenis_obat . "', '" . $produsen . "', '" . $satuan . "', '" . $isi . "', '" . $harga_beli . "', '" . $harga_satuan . "', '" . $harga_1_box . "', '" . $stok . "')");
}
else if ($nama_obat == '' && $nama_obat_update != '') {
    $updateobat = mysqli_query($koneksiDB, "SELECT stok FROM persediaanobat WHERE nama_obat='$nama_obat_update'");
    $row = $updateobat->fetch_assoc();
    $updatestok = ((int) $row["stok"]) + ((int) $tambah_stok);
    $sql1 = mysqli_query($koneksiDB, "UPDATE persediaanobat SET stok='$updatestok' WHERE nama_obat='$nama_obat_update'");
} else if ($nama_obat != '' && $nama_obat_update != '') {
    $sql = mysqli_query($koneksiDB, "INSERT INTO persediaanobat (nama_obat, jenis_obat, produsen, satuan, isi, harga_beli, harga_satuan, harga_1_box, stok)
    VALUES ('" . $nama_obat . "', '" . $jenis_obat . "', '" . $produsen . "', '" . $satuan . "', '" . $isi . "', '" . $harga_beli . "', '" . $harga_satuan . "', '" . $harga_1_box . "', '" . $stok . "')");   
    $updateobat = mysqli_query($koneksiDB, "SELECT stok FROM persediaanobat WHERE nama_obat='$nama_obat_update'");
    $row = $updateobat->fetch_assoc();
    $updatestok = ((int) $row["stok"]) + ((int) $tambah_stok);
    $sql1 = mysqli_query($koneksiDB, "UPDATE persediaanobat SET stok='$updatestok' WHERE nama_obat='$nama_obat_update'"); 
}
header('Location: uipersediaanobat.php');
exit;
?>