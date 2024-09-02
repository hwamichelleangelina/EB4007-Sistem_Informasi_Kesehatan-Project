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