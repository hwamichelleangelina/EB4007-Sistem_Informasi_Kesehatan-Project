<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!---Custom Css File!--->
  <link rel="stylesheet" href="styleshow.css">
  <title>Lihat Data Obat</title>
  <style type="text/css">
    table{
        overflow-x: auto;
        align-items: center; 
        margin: auto;
        border-collapse: collapse;
        width: 100%;
        font-family: 'Karla', sans-serif;
        font-size:23px;
        text-align: Left;
        border-style:hidden;
        border-radius: 20px;
        white-space: nowrap;
        background-color: rgba(255, 255, 255, 0.764);
    }
    th, td {
        border: 1px solid;
        border-radius: 20px;
        padding: 12px;
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
    <h2>Daftar Obat</h2>
    <br></br>
    <table>
            <tr>
                <th>Nama Obat</th>
                <th>Jenis Obat</th>
                <th>Stok</th>
            </tr>
            <?php
            $koneksiDB = mysqli_connect("localhost","root","","websitepuskemas");
            $sql = "SELECT * FROM persediaanobat";
            $result = $koneksiDB -> query($sql);

            if ($result ->num_rows > 0){
                while ($row = $result -> fetch_assoc()){
                    echo "<tr><td>". $row["nama_obat"]."</td><td>".$row["jenis_obat"]."</td><td>".$row["stok"]."</td></tr>";
                }
            }
            else {
                echo "No Results";
            }
            $koneksiDB->close();
            ?>
        </table>
  </div>
        
</body>
</html>


