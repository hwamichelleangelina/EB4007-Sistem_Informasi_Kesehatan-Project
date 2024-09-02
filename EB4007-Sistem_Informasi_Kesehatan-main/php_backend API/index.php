<html>
<head>
  
</head>
<body>
  <form action="inputakunpasien.php" method="post" enctype="multipart/form-data">
    <table>
    <tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama_lengkap" /></td></tr>
    <tr><td>NIK</td><td>:</td><td><input type="number" name="nik" /></td></tr>
    <tr><td>Tanggal Lahir</td><td>:</td><td><input type="date" name="tanggal_lahir" /></td></tr>
    <tr><td>Usia</td><td>:</td><td><input type="number" name="usia" /></td></tr>
    <tr><td>Tempat Tinggal</td><td>:</td><td><input type="text" name="tempat_tinggal" /></td></tr>
    <tr><td>Pemilik BPJS</td><td>:</td><td>
      <select name = "bpjs">
      <option value=""></option>
	    <option value="Ya">Ya</option>
	    <option value="Tidak">Tidak</option>
      </select>
    </td></tr>
    <tr><td>Jenis Kelamin</td><td>:</td><td>
      <select name = "jenis_kelamin">
      <option value=""></option>
	    <option value="Pria">Pria</option>
	    <option value="Wanita">Wanita</option>
      </select>
    </td></tr>
    <tr><td>Golongan Darah</td><td>:</td><td>
      <select name = "golongan_darah">
      <option value=""></option>
	    <option value="A">A</option>
	    <option value="AB">AB</option>
      <option value="B">B</option>
      <option value="O">O</option>
      </select>
    </td></tr>
    <tr><td>Pekerjaan</td><td>:</td><td><input type="text" name="pekerjaan" /></td></tr>
    <tr><td>Nomor Telepon (+62)</td><td>:</td><td><input type="number" name="nomor_telepon" /></td></tr>
    <tr><td>Email</td><td>:</td><td><input type="text" name="email" /></td></tr>
    <tr><td>Username</td><td>:</td><td><input type="text" name="username" /></td></tr>
    <tr><td>Password</td><td>:</td><td><input type="password" name="password"></td><td></tr>
  </table>
    <input type="Submit" name="aksi" value="Simpan"/> | <input type="reset" value="Hapus"/>
</body>
</html>
