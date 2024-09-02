<?php
 $conn = new mysqli('localhost','root','','websitepuskemas'); 
?>

<table border="1">
<tr>
  <th>Nomor Rekam Medis</th>
  <th>Nama Lengkap</th>
  <th>NIK</th>
  <th>Tanggal Lahir</th>
  <th>Usia</th>
  <th>Tempat Tinggal</th>
  <th>Pemilik BPJS</th>
  <th>Jenis Kelamin</th>
  <th>Golongan Darah</th>
  <th>Pekerjaan</th>
  <th>Nomor Telepon</th>
  <th>Alamat Email</th>
  <th>Username akun</th>
 </tr>

<?php
  $sql = "SELECT * FROM akunpasien";
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
    echo $row['usia']
   ?>
  </td>
  <td>
   <?php
    echo $row['tempat_tinggal']
   ?>
  </td>
  <td>
   <?php
    echo $row['bpjs']
   ?>
  </td>
  <td>
   <?php
    echo $row['jenis_kelamin']
   ?>
  </td>
  <td>
   <?php
    echo $row['golongan_darah']
   ?>
  </td>
  <td>
   <?php
    echo $row['pekerjaan']
   ?>
  </td>
  <td>
   <?php
    echo $row['nomor_telepon']
   ?>
  </td>
  <td>
   <?php
    echo $row['email']
   ?>
  </td>
  <td>
   <?php
    echo $row['username']
   ?>
  </td>
 
 <?php
   endwhile;
  endif;
 ?>
</table>