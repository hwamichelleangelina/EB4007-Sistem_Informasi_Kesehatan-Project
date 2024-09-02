<?php
 $conn = new mysqli('localhost','root','','websitepuskemas'); 
?>

<table border="1">
<tr>
  <th>Nomor Rekam Medis</th>
  <th>Keluhan Pasien</th>
  <th>Diagnosis</th>
  <th>Tindak Lanjut jika Dibutuhkan</th>
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
    echo $row['keluhan_pasien']
   ?>
  </td>
  <td>
   <?php
    echo $row['diagnosis']
   ?>
  </td>
  <td>
   <?php
    echo $row['tindak_lanjut']
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