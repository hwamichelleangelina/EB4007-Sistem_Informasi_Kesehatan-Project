<html>

<?php
session_start();
$koneksiDB = mysqli_connect("localhost","root","","websitepuskemas");

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!---Custom Css File!--->
  <link rel="stylesheet" href="styleregistrasi.css">
  <title>Hasil Pemeriksaan Pasien</title>
  <style type="text/css">
    table{
      overflow-y: auto;
      align-items: center; 
        margin: auto;
        border-collapse: collapse;
        width: 80%;
        font-family: 'Karla', sans-serif;
        font-size: 14px;
        text-align: Left;
      
        overflow: auto;
        
        margin-left:auto;
        margin-right:auto;
        
    }
    th, td {
        color: #000000;
        padding: 8px;
        text-align: left;
    }
    body{
    min-height: 100vh;
    align-items: center;
    justify-content: center;
    background: #000000;
    background-image: url(asd.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
}
    </style>
</head>
    <body background-attachment="fixed" background-repeat= "no-repeat">
    <div class="container">
        <nav>
            <div class="logo">
            <a href="#">Puskesmas <span>Sejahtera</span></a>
            </div>
        </nav>
    <br></br>    
    <header>Daftar Pemeriksaan</header>
    <div class="content">
    <form action="inputpemeriksaan.php" method="post" enctype="multipart/form-data" width="640px">
    <table>
    <tr><td>Nomor Rekam Medis</td><td>:</td><td><input type="number" name="rekam_medis" /></td></tr>
    <tr><td>Nama Lengkap Pasien</td><td>:</td><td><input type="text" name="nama_lengkap" /></td></tr>
    <tr><td>Keluhan Pasien</td><td>:</td><td><textarea name="keluhan_pasien"></textarea></td></tr>
    <tr><td>Diagnosis</td><td>:</td><td><input type="text" name="diagnosis" /></td></tr>
    <tr><td>Tindak Lanjut jika Dibutuhkan</td><td>:</td><td><input type="text" name="tindak_lanjut" /></td></tr>
    <tr><td>Dokter yang dituju</td><td>:</td><td><input type="text" name="dokter_dituju" /></td></tr>
    <tr><td>Tanggal Pemeriksaan</td><td>:</td><td><input type="date" name="tanggal_pemeriksaan" /></td></tr>
    <tr><td>Waktu Pemeriksaan</td><td>:</td><td><input type="time" name="waktu_pemeriksaan" /></td></tr>
    <tr><td>Obat yang Diberi</td><td>:</td><td><input type="text" name="obat_1" /></td></tr>
    <tr><td>Jumlah Obat yang Diberi</td><td>:</td><td><input type="number" name="jumlah_obat_1" /></td></tr>
    <tr><td>Satuan Obat</td><td>:</td><td>
      <select name = "satuan_obat_1">
      <option value=""></option>
	    <option value="PIL">PIL</option>
	    <option value="TABLET">TABLET</option>
      <option value="KAPSUL">KAPSUL</option>
      <option value="BOTOL">BOTOL</option>
      </select>
    </td></tr>
    <tr><td>Petunjuk Penggunaan Obat</td><td>:</td><td><input type="text" name="pemakaian_obat_1" /></td></tr>
    <tr><td>Obat yang Diberi</td><td>:</td><td><input type="text" name="obat_2" /></td></tr>
    <tr><td>Jumlah Obat yang Diberi</td><td>:</td><td><input type="number" name="jumlah_obat_2" /></td></tr>
    <tr><td>Satuan Obat</td><td>:</td><td>
      <select name = "satuan_obat_2">
      <option value=""></option>
	    <option value="PIL">PIL</option>
	    <option value="TABLET">TABLET</option>
      <option value="KAPSUL">KAPSUL</option>
      <option value="BOTOL">BOTOL</option>
      </select>
    </td></tr>
    <tr><td>Petunjuk Penggunaan Obat</td><td>:</td><td><input type="text" name="pemakaian_obat_2" /></td></tr>
    <tr><td>Obat yang Diberi</td><td>:</td><td><input type="text" name="obat_3" /></td></tr>
    <tr><td>Jumlah Obat yang Diberi</td><td>:</td><td><input type="number" name="jumlah_obat_3" /></td></tr>
    <tr><td>Satuan Obat</td><td>:</td><td>
      <select name = "satuan_obat_3">
      <option value=""></option>
	    <option value="PIL">PIL</option>
	    <option value="TABLET">TABLET</option>
      <option value="KAPSUL">KAPSUL</option>
      <option value="BOTOL">BOTOL</option>
      </select>
    </td></tr>
    <tr><td>Petunjuk Penggunaan Obat</td><td>:</td><td><input type="text" name="pemakaian_obat_3" /></td></tr>
    <tr><td>Obat yang Diberi</td><td>:</td><td><input type="text" name="obat_4" /></td></tr>
    <tr><td>Jumlah Obat yang Diberi</td><td>:</td><td><input type="number" name="jumlah_obat_4" /></td></tr>
    <tr><td>Satuan Obat</td><td>:</td><td>
      <select name = "satuan_obat_4">
      <option value=""></option>
	    <option value="PIL">PIL</option>
	    <option value="TABLET">TABLET</option>
      <option value="KAPSUL">KAPSUL</option>
      <option value="BOTOL">BOTOL</option>
      </select>
    </td></tr>
    <tr><td>Petunjuk Penggunaan Obat</td><td>:</td><td><input type="text" name="pemakaian_obat_4" /></td></tr>
  </table>

  <br>
  <button type="submit" class="buttons">
                            <span href="index.html" class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
  </br>
  </form>
</body>
</html>