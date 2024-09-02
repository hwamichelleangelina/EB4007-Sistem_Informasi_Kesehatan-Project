<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!---Custom Css File!--->
  <link rel="stylesheet" href="styleregistrasi.css">
  <title>Pengambilan Obat Oleh Pasien</title>
  <style type="text/css">
    table{
      verflow-y: auto;
      align-items: center; 
        margin: auto;
        border-collapse: collapse;
        width: 80%;
        font-family: 'Karla', sans-serif;
        font-size: 14px;
        text-align: Left;
      
        overflow: auto;
        
        margin-left:auto;
        margin-right:auto;
    }
    th, td {
        color: #000000;
        padding: 8px;
        text-align: left;
    }
    body{
    min-height: 100vh;
    align-items: center;
    justify-content: center;
    background: #000000;
    background-image: url(asd.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
}
    </style>
</head>
    <body>
    <div class="container">
        <nav>
            <div class="logo">
            <a href="#">Puskesmas <span>Sejahtera</span></a>
            </div>
        </nav>
    <br></br>    
    <header>Pengambilan Obat Oleh Pasien</header>
    <br></br>
    <div class="content">
    <form action="inputambilobat.php" method="post" enctype="multipart/form-data">
    <table>
    <tr><td>Nomor Rekam Medis</td><td>:</td><td><input type="number" name="rekam_medis" /></td></tr>
    <tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama_lengkap" /></td></tr>
    <tr><td>Obat yang Diberi</td><td>:</td><td><input type="text" name="obat_1" /></td></tr>
    <tr><td>Jumlah Obat yang Diberi</td><td>:</td><td><input type="number" name="jumlah_obat_1" /></td></tr>
    <tr><td>Satuan Obat</td><td>:</td><td>
      <select name = "satuan_obat_1">
      <option value=""></option>
	    <option value="PIL">PIL</option>
	    <option value="TABLET">TABLET</option>
      <option value="KAPSUL">KAPSUL</option>
      <option value="BOTOL">BOTOL</option>
      </select>
    </td></tr>

    <tr><td>Obat yang Diberi</td><td>:</td><td><input type="text" name="obat_2" /></td></tr>
    <tr><td>Jumlah Obat yang Diberi</td><td>:</td><td><input type="number" name="jumlah_obat_2" /></td></tr>
    <tr><td>Satuan Obat</td><td>:</td><td>
      <select name = "satuan_obat_2">
      <option value=""></option>
	    <option value="PIL">PIL</option>
	    <option value="TABLET">TABLET</option>
      <option value="KAPSUL">KAPSUL</option>
      <option value="BOTOL">BOTOL</option>
      </select>
    </td></tr>

    <tr><td>Obat yang Diberi</td><td>:</td><td><input type="text" name="obat_3" /></td></tr>
    <tr><td>Jumlah Obat yang Diberi</td><td>:</td><td><input type="number" name="jumlah_obat_3" /></td></tr>
    <tr><td>Satuan Obat</td><td>:</td><td>
      <select name = "satuan_obat_3">
      <option value=""></option>
	    <option value="PIL">PIL</option>
	    <option value="TABLET">TABLET</option>
      <option value="KAPSUL">KAPSUL</option>
      <option value="BOTOL">BOTOL</option>
      </select>
    </td></tr>

    <tr><td>Obat yang Diberi</td><td>:</td><td><input type="text" name="obat_4" /></td></tr>
    <tr><td>Jumlah Obat yang Diberi</td><td>:</td><td><input type="number" name="jumlah_obat_4" /></td></tr>
    <tr><td>Satuan Obat</td><td>:</td><td>
      <select name = "satuan_obat_4">
      <option value=""></option>
	    <option value="PIL">PIL</option>
	    <option value="TABLET">TABLET</option>
      <option value="KAPSUL">KAPSUL</option>
      <option value="BOTOL">BOTOL</option>
      </select>
    </td></tr>

    <tr><td>Tanggal Pengambilan Obat Oleh Pasien</td><td>:</td><td><input type="date" name="tanggal_ambil_obat" /></td></tr>
    <tr><td>Waktu Pengambilan Obat Oleh Pasien</td><td>:</td><td><input type="time" name="waktu_ambil_obat" /></td></tr>
  </table>
  <br>
  <button type="submit" class="buttons">
                            <span href="index.html" class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
  </br>
</body>
</html>