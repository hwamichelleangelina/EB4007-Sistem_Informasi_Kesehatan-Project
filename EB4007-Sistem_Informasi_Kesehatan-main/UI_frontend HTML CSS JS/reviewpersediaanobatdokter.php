<?php
 $conn = new mysqli('localhost','root','','websitepuskemas'); 
?>

<table border="1">
<tr>
  <th>Nama Obat</th>
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
    echo $row['stok']
   ?>
  </td>
 
 <?php
   endwhile;
  endif;
 ?>
</table>