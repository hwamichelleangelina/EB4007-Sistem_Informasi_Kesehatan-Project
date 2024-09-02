<!---Coding By CoderGirl!--->
<html>

<?php
session_start();
$koneksiDB = mysqli_connect("localhost","root","","websitepuskemas");
$username = $_SESSION['username'];
$sql = "SELECT * FROM akunpasien WHERE username = '$username'";
?>
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Menu Pasien</title>
  <!---Custom Css File!--->
  <link rel="stylesheet" href="stylemenu.css">
   <!-- Google Fonts Link -->
   <link
   href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700;800&display=swap"
   rel="stylesheet"
 />
 <!-- Line Awesome CDN Link -->
 <link
   rel="stylesheet"
   href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
 />
</head>
<body>
  <div class="container">
    <nav>
      <div class="logo">
        <a href="#">Puskesmas <span>Sejahtera</span></a>
      </div>
      
      <div class="buttons">
        <a href="index.html" class="login">Logout</a>
        <a class="btn"><?php echo $username ?></a>
      </div>
    </nav>
    <div class="main-container">
        <h2>Pilih Menu</h2>
        <div class="radio-buttons">
          <label class="custom-radio">
            <input type="radio" name="radio" checked />
            <span class="radio-btn"  onclick="location.href='accountdetailpasien.php'"
              ><i class="las la-check"></i>
              <div class="hobbies-icon">
                <i class="las la-user"></i>
                <h3>Lihat Akun</h3>
              </div>
            </span>
          </label>
          <label class="custom-radio">
            <input type="radio" name="radio" />
            <span class="radio-btn"  onclick="location.href='indexdaftar.php'"
              ><i class="las la-check"></i>
              <div class="hobbies-icon">
                <i class="las la-clipboard"></i>
                <h3>Buat Jadwal</h3>
              </div>
            </span>
          </label>
        </div>
      </div>
    
  </div>
</body>
</html>

 