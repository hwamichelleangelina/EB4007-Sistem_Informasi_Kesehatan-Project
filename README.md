# Tugas Besar
### EB4007 Sistem Informasi Kesehatan (2022/2023)
Tugas besar mata kuliah EB4007 diminta untuk membuat suatu _website_ puskesmas yang dapat diakses oleh pasien, dokter, staf adminitrasi, dan staf farmasi. Tugas ini menggunakan `html`, `php`, `css`, dan `sql` yang dihubungkan satu sama lain untuk membuat _website_ yang baik mulai dari input data, menghapus data, membaca data, dan meng-_update_ data

### Kelompok 7
1. Michelle Angelina/18320007
2. Muhammad Fairuziko Nurrajab/18319025
3. Muhammad Alief Septiawan/18319034

### Petunjuk
* Untuk menjalankan _homepage_, jalankan dokumen index.html
* Pastikan semua _file_ dalam folder yang sama
* Pastikan XAMPP MySQL dan Apache telah berjalan

### Fungsi _file-file_ pada _source code_
+ accountdetailadmin.php 
<sub> untuk menampilkan detail akun staf administrasi yang sedang _login_ </sub>
+ accountdetaildokter.php
<sub> untuk menampilkan detail akun dokter yang sedang _login_ </sub>
+ accountdetailfarmasi.php
<sub> untuk menampilkan detail akun staf farmasi yang sedang _login_ </sub>
+ accountdetailpasien.php
<sub> untuk menampilkan detail akun pasien yang sedang _login_ </sub>
+ asd.jpg
<sub> untuk desain _background website_ </sub>
+ index.html
<sub> untuk menampilkan desain _homepage </sub>
+ index.php
<sub> untuk menampilkan halaman registrasi tanpa UI </sub>
+ indexambilobat.php
<sub> untuk menampilkan halaman pemberian obat kepada pasien yang diakses dan diisi oleh staf farmasi </sub>
+ indexdaftar.php
<sub> untuk menampilkan halaman pembuatan jadwal pemeriksaan yang diakses dan diisi oleh pasien </sub>
+ indexpemeriksaan.php
<sub> untuk menampilkan halaman pemeriksaan yang diakses dan diisi oleh dokter </sub>
+ indexresetpassword.php
<sub> untuk menampilkan halaman _reset password_ yang diakses dan diisi oleh pasien saat lupa password untuk _login_ </sub>
+ inputakunpasien.php
<sub> untuk memasukkan hasil input registrasi akun pasien pengguna ke dalam _database_ yang telah tersambung ke _file_ ini </sub>
+ inputambilobat.php
<sub> untuk memasukkan hasil input pemberian obat kepada pasien oleh staf farmasi ke dalam _database_ yang telah tersambung ke _file_ ini </sub>
+ inputdaftar.php
<sub> untuk memasukkan hasil input pembuatan jadwal oleh pasien ke dalam _database_ yang telah tersambung ke _file_ ini </sub>
+ inputpemeriksaan.php
<sub> untuk memasukkan hasil input pemeriksaan pasien oleh dokter ke dalam _database_ yang telah tersambung ke _file_ ini </sub>
+ inputpersediaanobat.php
<sub> untuk memasukkan hasil input _update_ persediaan obat oleh staf farmasi ke dalam _database_ yang telah tersambung ke _file_ ini </sub>
+ inputresetpassword.php
<sub> untuk memasukkan hasil input password baru oleh pasien ke dalam _database_ yang telah tersambung ke _file_ ini dan mengganti password lama menjadi password baru </sub>
+ koneksiDB.php
<sub> untuk menghubungkan _file_ php ke phpmyAdmin SQL </sub>
+ loginadmin.html
<sub> untuk menampilkan UI halaman _login_ milik staf administrasi </sub>
+ loginadmin.php
<sub> untuk menghubungkan _database_ ke hasil input _login_ kemudian validasi akun yang masuk </sub>
+ logindokter.html
<sub> untuk menampilkan UI halaman _login_ milik dokter </sub>
+ logindokter.php
<sub> untuk menghubungkan _database_ ke hasil input _login_ kemudian validasi akun yang masuk </sub>
+ loginfarmasi.html
<sub> untuk menampilkan UI halaman _login_ milik staf farmasi </sub>
+ loginfarmasi.php
<sub> untuk menghubungkan _database_ ke hasil input _login_ kemudian validasi akun yang masuk </sub>
+ loginpasien.html
<sub> untuk menampilkan UI halaman _login_ milik pasien </sub>
+ loginpasien.php
<sub> untuk menghubungkan _database_ ke hasil input _login_ kemudian validasi akun yang masuk </sub>
+ loginstaf.html
<sub> untuk menampilkan UI halaman pilihan menu _login_ untuk para staf medis </sub>
+ logout.php
<sub> untuk menyelesaikan _session login_ akun pengguna, untuk _logout_ </sub>
+ menuadmin.html
<sub> untuk menampilkan UI halaman pilihan menu untuk staf administrasi </sub>
+ menudokter.html
<sub> untuk menampilkan UI halaman pilihan menu untuk dokter </sub>
+ menufarmasi.html
<sub> untuk menampilkan UI halaman pilihan menu untuk staf farmasi </sub>
+ menupasien.html
<sub> untuk menampilkan UI halaman pilihan menu untuk pasien </sub>
+ menupasien.php
<sub> untuk menampilkan UI halaman pilihan menu untuk pasien </sub>
+ registrasi.html
<sub> untuk menampilkan UI halaman mengisi data untuk registrasi akun pada _website_ puskesmas </sub>
+ registrasiberhasil.html
<sub> untuk menampilkan UI halaman notifikasi registrasi telah berhasil dilakukan oleh pasien </sub>
+ resetpassword.html
<sub> untuk menampilkan UI halaman mengisi password baru bagi pasien yang lupa password akun pada _website_ puskesmas </sub>
+ resetpasswordberhasil.html
<sub> untuk menampilkan UI halaman notifikasi password telah berhasil diganti oleh pasien </sub>
+ reviewdaftarulangadmin.php
<sub> untuk menampilkan UI halaman data hasil pembuatan jadwal pemeriksaan yang telah diisi oleh pasien, dapat diakses oleh staf administrasi </sub>
+ reviewdaftarulangdokter.php
<sub> untuk menampilkan UI halaman data hasil pembuatan jadwal pemeriksaan yang telah diisi oleh pasien, dapat diakses oleh dokter </sub>
+ reviewpemeriksaandokter.php
<sub> untuk menampilkan UI halaman data hasil pemeriksaan pasien yang telah diisi oleh dokter, dapat diakses oleh dokter </sub>
+ reviewpemeriksaanfarmasi.php
<sub> untuk menampilkan UI halaman data hasil pemeriksaan pasien yang telah diisi oleh dokter, dapat diakses oleh staf farmasi </sub>
+ reviewpersediaanobatdokter.php
<sub> untuk menampilkan UI halaman data persediaan obat yang ada di puskesmas, diakses oleh dokter. Tabel data persediaan obat dapat di_update_ oleh staf farmasi </sub>
+ reviewpersediaanobatfarmasi.php
<sub> untuk menampilkan halaman data persediaan obat yang ada di puskesmas, diakses oleh staf farmasi. Tabel data persediaan obat dapat di_update_ oleh staf farmasi </sub>
+ show.php
<sub> untuk menampilkan UI halaman data pasien hasil input saat registrasi, dapat diakses oleh pasien saat melihat akun </sub>
+ showdatapasienadmin.php
<sub> untuk menampilkan UI halaman data pasien hasil input saat registrasi, dapat diakses oleh staf administrasi saat melihat data akun pasien </sub>
+ showdatapasiendokter.php
<sub> untuk menampilkan UI halaman data pasien hasil input saat registrasi, dapat diakses oleh dokter saat melihat data akun pasien </sub>
+ showdatapasienfarmasi.php
<sub> untuk menampilkan UI halaman data pasien hasil input saat registrasi, dapat diakses oleh staf farmasi saat melihat data akun pasien </sub>
+ showdataobat.php
<sub> untuk menampilkan UI halaman data obat terlengkap yang tersedia, diakses oleh staf farmasi </sub>
+ style.css
<sub> untuk memberikan desain pada _homepage_ </sub>
+ styleaccountdetail.css
<sub> untuk memberikan desain pada halaman detail akun </sub>
+ stylelogin.css
<sub> untuk memberikan desain pada halaman-halaman _login_ </sub>
+ stylemenu.css
<sub> untuk memberikan desain pada halaman-halaman menu </sub>
+ styleregistrasi.css
<sub> untuk memberikan desain pada halaman registrasi </sub>
+ styleshow.css
<sub> untuk memberikan desain pada halaman data akun pasien </sub>
+ uipersediaanobat.php
<sub> untuk untuk menampilkan UI halaman data persediaan obat yang ada di puskesmas </sub>
+ websitepuskemas.sql
<sub> untuk membuat _database website_ puskesmas di phpmyAdmin </sub>
