<html>

<?php
session_start();
$koneksiDB = mysqli_connect("localhost","root","","websitepuskemas");
$username_admin = $_SESSION['username_admin'];
$sql = "SELECT * FROM akunadministrasi WHERE username_admin= '$username_admin'";

$result = mysqli_query($koneksiDB,$sql);
$row=mysqli_fetch_array($result);
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!---Custom Css File!--->
  <link rel="stylesheet" href="styleaccountdetail.css">
  <title>Lihat Data Staf Administrasi</title>
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
            <a href="menuadmin.html" class="btn"><?php echo $username_admin ?></a>
            </div>
        </nav>
    <br></br>    
    <h2>Data Akun</h2>
    <br></br>
    <div class="content">
    <table>
            <?php
            $nik_admin= $row[0];
            $nama_admin= $row[1];
            $username_admin= $row[2];
            $password_admin= $row[3];

            echo "<tr><th>NIK</th><td>".$nik_admin."</td></tr><tr><th>Nama Lengkap</th><td>".$nama_admin."</td></tr><tr><th>Username</th><td>".$username_admin."</td></tr>";

            $koneksiDB->close();
            ?>
    </div>
    </table>
  </div>
        
</body>
</html>


