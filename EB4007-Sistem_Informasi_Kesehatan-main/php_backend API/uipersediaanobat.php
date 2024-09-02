<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styleregistrasi.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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
    .content h2{
        margin: auto:
        font-size: 60px;
        color: #ffffff;
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
        <br>
        <header>Update Persediaan Obat</header>
        </br>      
        <span>Update Stok</span>  
        <form method="post" action="inputpersediaanobat.php">
        
        <div class="form first">
                <div class="details personal">

                    <div class="fields">
                        <div class="input-field">
                            <label for="nama_obat_update">Nama Obat</label>
                            <input type="text" name="nama_obat_update" id="nama_obat_update" placeholder="Nama Obat" required>
                        </div>

                        <div class="input-field">
                            <label for="jenis_obat_update">Jenis Obat</label>
                            <input type="text" name="jenis_obat_update" id="jenis_obat_update" placeholder="Jenis Obat" required>
                        </div>

                        <div class="input-field">
                            <label for="tambah_stok">Tambah Stok</label>
                            <input type="number" name="tambah_stok" id="tambah_stok" placeholder="Tambah Stok" required>
                        </div>
                    </div>
                    <input type="hidden" name="act" value="editing"/>
                    <button type="submit" class="buttons">
                            <span href="uipersediaanobat.php" class="btnText">Submit Update</span>
                            <i class="uil uil-navigator"></i>
                    </button> 
                </div>
            </div>
        </form>
        </br>
        <span>Tambah Obat</span>
        <form method="post" action="inputpersediaanobat.php">
        
            <div class="form first">
                <div class="details personal">
                    <div class="fields">
                        <div class="input-field">
                            <label for="nama_obat">Nama Obat</label>
                            <input type="text" name="nama_obat" id="nama_obat" placeholder="Nama Obat" required>
                        </div>

                        <div class="input-field">
                            <label for="jenis_obat">Jenis Obat</label>
                            <input type="text" name="jenis_obat" id="jenis_obat" placeholder="Jenis Obat" required>
                        </div>

                        <div class="input-field">
                            <label for="produsen">Produsen</label>
                            <input type="text" name="produsen" id="produsen" placeholder="Produsen" required>
                        </div>

                        <div class="input-field">
                            <label for="satuan">Satuan Obat</label>
                            <select name="satuan" id="satuan">
                                <option value="PIL">PIL</option>
                                <option value="TABLET">TABLET</option>
                                <option value="Kapsul">KAPSUL</option>
                                <option value="Botol">BOTOL</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="isi">Isi</label>
                            <input type="number" name="isi" id="isi" placeholder="Isi" required>
                        </div>

                        <div class="input-field">
                            <label for="harga_beli">Harga Beli</label>
                            <input type="number" name="harga_beli" id="harga_beli" placeholder="Harga Beli" required>
                        </div>

                        <div class="input-field">
                            <label for="harga_satuan">Harga Satuan</label>
                            <input type="number" name="harga_satuan" id="harga_satuan" placeholder="Harga Satuan" required>
                        </div>

                        <div class="input-field">
                            <label for="harga_1_box">Harga 1 Box</label>
                            <input type="number" name="harga_1_box" id="harga_1_box" placeholder="Harga 1 Box" required>
                        </div>

                        <div class="input-field">
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" id="stok" placeholder="Stok" required>
                        </div>    
                        <br>                    

                    </div>
                        <input type="hidden" name="act" value="adding"/>
                        <button type="submit" class="buttons">
                            <span href="index.html" class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>

                    </div>
                    
                </div>
            </div>
        </form>
    </div>

    <!--<script src="script.js"></script>-->

</body>
</html>