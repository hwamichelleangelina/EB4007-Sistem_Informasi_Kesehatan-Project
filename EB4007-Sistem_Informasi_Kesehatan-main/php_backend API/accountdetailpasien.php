<html>

<?php
session_start();
$koneksiDB = mysqli_connect("localhost","root","","websitepuskemas");
$username = $_SESSION['username'];
$sql = "SELECT * FROM akunpasien WHERE username = '$username'";

$result = mysqli_query($koneksiDB,$sql);
$row=mysqli_fetch_array($result);
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Simple Website Design</title>
  <!---Custom Css File!--->
  <link rel="stylesheet" href="styleaccountdetail.css">
  <title>Lihat Data Pasien</title>
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
            <a href="menupasien.html" class="btn"><?php echo $username ?></a>
            </div>
        </nav>
    <br></br>    
    <h2>Data Akun</h2>
    <br></br>
    <div class="content">
    <table>
            <?php
            $rekam_medis= $row[0];
            $nama_lengkap= $row[1];
            $nik= $row[2];
            $tanggal_lahir= $row[3];
            $usia= $row[4];
            $tempat_tinggal= $row[5];
            $bpjs= $row[6];
            $jenis_kelamin= $row[7];
            $golongan_darah= $row[8];
            $pekerjaan= $row[9];
            $nomor_telepon= $row[10];
            $email= $row[11];
            $username= $row[12];

            echo "<tr><th>Rekam Medis</th><td>".$rekam_medis."</td></tr><tr><th>Nama Lengkap</th><td>".$nama_lengkap."</td></tr><tr><th>NIK</th><td>".$nik."</td></tr><tr><th>Tanggal Lahir</th><td>".$tanggal_lahir."</td></tr><tr><th>USIA</th><td>".$tempat_tinggal."</td></tr><tr><th>BPJS</th><td>".$bpjs."</td></tr><tr><th>Jenis Kelamin</th><td>".$jenis_kelamin."</td></tr><tr><th>Golongan Darah</th><td>".$golongan_darah."</td></tr><tr><th>Pekerjaan</th><td>".$pekerjaan."</td></tr><tr><th>Nomor Telepon</th><td>".$nomor_telepon."</td></tr><tr><th>Email</th><td>".$email."</td></tr><tr><th>Username</th><td>".$username."</td></tr>";

            /*echo  "Rekam Medis:" .$rekam_medis . "<BR>" .  $nama_lengkap . "<BR>" .  $nik . "<BR>" .  $tanggal_lahir . "<BR>" .  $usia . "<BR>" . $tempat_tinggal . "<BR>" . $bpjs . "<BR>" . $jenis_kelamin . "<BR>" . $golongan_darah . "<BR>" . $pekerjaan . "<BR>" . $nomor_telepon . "<BR>" . $email . "<BR>" . $username . "<BR>" . 
            */
            $koneksiDB->close();
            ?>
    </div>
    </table>
  </div>
        
</body>
</html>


