<html>
<head>
<tr><td><b>Update Stok Persediaan Obat</b></td><td>
</head>
<br>
<body>
  <form action="inputpersediaanobat.php" method="post" enctype="multipart/form-data">
    <table>
    <tr><td>Nama Obat</td><td>:</td><td><input type="text" name="nama_obat_update" /></td></tr>
    <tr><td>Jenis Obat</td><td>:</td><td><input type="text" name="jenis_obat_update" /></td></tr>
    <tr><td>Tambah Stok Persediaan Obat</td><td>:</td><td><input type="number" name="tambah_stok" /></td></tr>
  </table>
  <br>
  <br>
  <head>
  <tr><td><b>Tambah Obat</b></td><td>
  </head>
  <br>
  <table>
    <tr><td>Nama Obat</td><td>:</td><td><input type="text" name="nama_obat" /></td></tr>
    <tr><td>Jenis Obat</td><td>:</td><td><input type="text" name="jenis_obat" /></td></tr>
    <tr><td>Produsen</td><td>:</td><td><input type="text" name="produsen" /></td></tr>
    <tr><td>Satuan Obat</td><td>:</td><td>
      <select name = "satuan">
      <option value=""></option>
	    <option value="PIL">PIL</option>
	    <option value="TABLET">TABLET</option>
      <option value="KAPSUL">KAPSUL</option>
      <option value="BOTOL">BOTOL</option>
      </select>
    </td></tr>
    <tr><td>Isi per Strip/Botol (ml)</td><td>:</td><td><input type="number" name="isi" /></td></tr>
    <tr><td>Harga Beli</td><td>:</td><td><input type="number" name="harga_beli" /></td></tr>
    <tr><td>Harga Satuan</td><td>:</td><td><input type="number" name="harga_satuan" /></td></tr>
    <tr><td>Harga per Box</td><td>:</td><td><input type="number" name="harga_1_box" /></td></tr>
    <tr><td>Stok Persediaan Obat</td><td>:</td><td><input type="number" name="stok" /></td></tr>
  </table>
  <br>
    <input type="Submit" name="aksi" value="Simpan"/> | <input type="reset" value="Hapus"/>
  <br>
  <br>
</body>
</html>

<?php
 $conn = new mysqli('localhost','root','','websitepuskemas'); 
?>

<table border="1">
<tr>
  <th>Nama Obat</th>
  <th>Jenis Obat</th>
  <th>Produsen</th>
  <th>Satuan Obat</th>
  <th>Isi per Strip/Botol</th>
  <th>Harga Beli</th>
  <th>Harga Satuan</th>
  <th>Harga per Box</th>
  <th>Stok Persediaan Obat</th>

 </tr>

<?php
  $sql = "SELECT * FROM persediaanobat";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) :
      while($row = $result->fetch_assoc()) :
 ?>
 <tr>
  <td>
   <?php
    echo $row['nama_obat']
   ?>
  </td>
  <td>
   <?php
    echo $row['jenis_obat']
   ?>
  </td>
  <td>
   <?php
    echo $row['produsen']
   ?>
  </td>
  <td>
   <?php
    echo $row['satuan']
   ?>
  </td>
  <td>
   <?php
    echo $row['isi']
   ?>
  </td>
  <td>
   <?php
    echo $row['harga_beli']
   ?>
  </td>
  <td>
   <?php
    echo $row['harga_satuan']
   ?>
  </td>
  <td>
   <?php
    echo $row['harga_1_box']
   ?>
  </td>
  <td>
   <?php
    echo $row['stok']
   ?>
  </td>
 
 <?php
   endwhile;
  endif;
 ?>
</table>