<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Simple Website Design</title>
  <!---Custom Css File!--->
  <link rel="stylesheet" href="styleshow.css">
  <title>Lihat Data Pasien</title>
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
    <h2>Daftar Data Pasien</h2>
    <br></br>
    <table>
            <tr>
                <th>Rekam Medis</th>
                <th>Nama Lengkap</th>
                <th>NIK</th>
                <th>Tanggal Lahir</th>
                <th>Usia</th>
                <th>Tempat Tinggal</th>
                <th>Status BPJS</th>
                <th>Jenis Kelamin</th>
                <th>Golongan Darah</th>
                <th>Pekerjaan</th>
                <th>Nomor Telepon</th>
                <th>Alamat Email</th>
                <th>Username</th>
            </tr>
            <?php
            $koneksiDB = mysqli_connect("localhost","root","","websitepuskemas");
            $sql = "SELECT * FROM akunpasien";
            $result = $koneksiDB -> query($sql);

            if ($result ->num_rows > 0){
                while ($row = $result -> fetch_assoc()){
                    echo "<tr><td>". $row["rekam_medis"]."</td><td>".$row["nama_lengkap"]."</td><td>".$row["nik"]."</td><td>".$row["tanggal_lahir"]."</td><td>".$row["usia"]."</td><td>".$row["tempat_tinggal"]."</td><td>".$row["bpjs"]."</td><td>".$row["jenis_kelamin"]."</td><td>".$row["golongan_darah"]."</td><td>".$row["pekerjaan"]."</td><td>".$row["nomor_telepon"]."</td><td>".$row["email"]."</td><td>".$row["username"]. "</td></tr>";
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


