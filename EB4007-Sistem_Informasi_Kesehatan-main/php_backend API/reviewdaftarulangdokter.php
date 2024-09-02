<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Website Puskesmas Sejahtera</title>
  <!---Custom Css File!--->
  <link rel="stylesheet" href="styleshow.css">
  <title>Lihat Jadwal Pemeriksaan Pasien</title>
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
            <a href="menudokter.html" class="btn">Menu</a>
            </div>
        </nav>
    <br></br>    
    <h2>Daftar Jadwal Pemeriksaan Pasien</h2>
    <br></br>
    <table>


<?php
 $conn = new mysqli('localhost','root','','websitepuskemas'); 
?>

<table border="1">
<tr>
  <th>Nomor Rekam Medis</th>
  <th>Nama Lengkap</th>
  <th>NIK</th>
  <th>Tanggal Lahir</th>
  <th>Pemilik BPJS</th>
  <th>Poli yang Dituju</th>
  <th>Dokter yang Dituju</th>
  <th>Tanggal Pemeriksaan</th>
  <th>Waktu Pemeriksaan</th>
  <th>Keluhan Singkat</th>
 </tr>

<?php
  $sql = "SELECT * FROM daftarulang";
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
    echo $row['nik']
   ?>
  </td>
  <td>
   <?php
    echo $row['tanggal_lahir']
   ?>
  </td>
  <td>
   <?php
    echo $row['bpjs']
   ?>
  </td>
  <td>
   <?php
    echo $row['poli_dituju']
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
    echo $row['keluhan_pasien']
   ?>
  </td>
 
 <?php
   endwhile;
  endif;
 ?>
</table>