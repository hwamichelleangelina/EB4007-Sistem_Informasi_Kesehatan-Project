<?php
 $conn = new mysqli('localhost','root','','websitepuskemas'); 
?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Website Puskesmas Sejahtera</title>
  <!---Custom Css File!--->
  <link rel="stylesheet" href="styleshow.css">
  <title>Lihat Data Kebutuhan Obat</title>
  <style type="text/css">
    table{
        border-collapse: collapse;
        width: 100%;
        font-family: 'Karla', sans-serif;
        font-size: 12px;
        text-align: Left;
        display: block;
        overflow-x: auto;
        white-space: nowrap;
        background-color: rgba(255, 255, 255, 0.764);
    }
    th, td {
        border: 1px solid;
        padding: 8px;
        text-align: left;
        color:#000000;
    }
    </style>
</head>
    <body>
    <div class="container">
        <nav>
            <div class="logo">
            <a href="index.html">Puskesmas<span> Sejahtera</span></a>
            </div>
            <div class="buttons">
            <a href="menufarmasi.html" class="btn">Menu</a>
            </div>
        </nav>
    <br></br>    
    <h2>Daftar Data Kebutuhan Obat Pasien</h2>
    <br></br>

<table border="1">
<tr>
  <th>Nomor Rekam Medis</th>
  <th>Nama Lengkap Pasien</th>
  <th>Dokter yang Dituju</th>
  <th>Tanggal Pemeriksaan</th>
  <th>Waktu Pemeriksaan</th>
  <th>Obat yang Diberi</th>
  <th>Jumlah Obat yang Diberi</th>
  <th>Satuan Obat</th>
  <th>Petunjuk Penggunaan Obat</th>
  <th>Obat yang Diberi</th>
  <th>Jumlah Obat yang Diberi</th>
  <th>Satuan Obat</th>
  <th>Petunjuk Penggunaan Obat</th>
  <th>Obat yang Diberi</th>
  <th>Jumlah Obat yang Diberi</th>
  <th>Satuan Obat</th>
  <th>Petunjuk Penggunaan Obat</th>
  <th>Obat yang Diberi</th>
  <th>Jumlah Obat yang Diberi</th>
  <th>Satuan Obat</th>
  <th>Petunjuk Penggunaan Obat</th>

 </tr>

<?php
  $sql = "SELECT * FROM pemeriksaandokter";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) :
      while($row = $result->fetch_assoc()) :
 ?>
 <tr>
  <td>
   <?php
    echo $row['rekam_medis']
   ?>
  </td>
  <td>
   <?php
    echo $row['nama_lengkap']
   ?>
  </td>
  <td>
   <?php
    echo $row['dokter_dituju']
   ?>
  </td>
  <td>
   <?php
    echo $row['tanggal_pemeriksaan']
   ?>
  </td>
  <td>
   <?php
    echo $row['waktu_pemeriksaan']
   ?>
  </td>
  <td>
   <?php
    echo $row['obat_1']
   ?>
  </td>
  <td>
   <?php
    echo $row['jumlah_obat_1']
   ?>
  </td>
  <td>
   <?php
    echo $row['satuan_obat_1']
   ?>
  </td>
  <td>
   <?php
    echo $row['pemakaian_obat_1']
   ?>
  </td>
  <td>
   <?php
    echo $row['obat_2']
   ?>
  </td>
  <td>
   <?php
    echo $row['jumlah_obat_2']
   ?>
  </td>
  <td>
   <?php
    echo $row['satuan_obat_2']
   ?>
  </td>
  <td>
   <?php
    echo $row['pemakaian_obat_2']
   ?>
  </td>
  <td>
   <?php
    echo $row['obat_3']
   ?>
  </td>
  <td>
   <?php
    echo $row['jumlah_obat_3']
   ?>
  </td>
  <td>
   <?php
    echo $row['satuan_obat_3']
   ?>
  </td>
  <td>
   <?php
    echo $row['pemakaian_obat_3']
   ?>
  </td>
  <td>
   <?php
    echo $row['obat_4']
   ?>
  </td>
  <td>
   <?php
    echo $row['jumlah_obat_4']
   ?>
  </td>
  <td>
   <?php
    echo $row['satuan_obat_4']
   ?>
  </td>
  <td>
   <?php
    echo $row['pemakaian_obat_4']
   ?>
  </td>
 
 <?php
   endwhile;
  endif;
 ?>
</table>