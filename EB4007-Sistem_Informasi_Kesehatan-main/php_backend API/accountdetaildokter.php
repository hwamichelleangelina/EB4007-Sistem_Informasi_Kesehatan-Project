<html>

<?php
session_start();
$koneksiDB = mysqli_connect("localhost","root","","websitepuskemas");
$username_dokter = $_SESSION['username_dokter'];
$sql = "SELECT * FROM akundokter WHERE username_dokter= '$username_dokter'";

$result = mysqli_query($koneksiDB,$sql);
$row=mysqli_fetch_array($result);
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!---Custom Css File!--->
  <link rel="stylesheet" href="styleaccountdetail.css">
  <title>Lihat Data Dokter</title>
  <style type="text/css">
    table{
        border-collapse: collapse;
        width: 100%;
        font-family: 'Karla', sans-serif;
        font-size: 14px;
        text-align: Left;
        display: inline-block;
        overflow: auto;
        white-space: nowrap;
        margin-left:auto;
        margin-right:auto;
    }
    th, td {
        color: #000000;
        padding: 8px;
        text-align: left;
    }
    </style>
</head>
    <body>
    <div class="container">
        <nav>
            <div class="logo">
            <a href="#">Puskesmas <span>Sejahtera</span></a>
            </div>
            <div class="buttons">
            <a href="menudokter.html" class="btn"><?php echo $username_dokter ?></a>
            </div>
        </nav>
    <br></br>    
    <h2>Data Akun</h2>
    <br></br>
    <div class="content">
    <table>
            <?php
            $nik_dokter= $row[0];
            $nama_dokter= $row[1];
            $poli= $row[2];
            $shift_hari= $row[3];
            $shift_jam= $row[4];
            $username_dokter= $row[5];
            $password_dokter= $row[6];

            echo "<tr><th>NIK</th><td>".$nik_dokter."</td></tr><tr><th>Nama Lengkap</th><td>".$nama_dokter."</td></tr><tr><th>Poli</th><td>".$poli."</td></tr><tr><th>Shift Hari</th><td>".$shift_hari."</td></tr><tr><th>Shift Jam</th><td>".$shift_jam."</td></tr><tr><th>Username</th><td>".$username_dokter."</td></tr>";

            $koneksiDB->close();
            ?>
    </div>
    </table>
  </div>
        
</body>
</html>


