<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/AZ.ico">
    <title>AnharZtore</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- header -->
    <div class="atas">
        <nav>
            <a href="index.html" id="logo"> Anhar <font color="#f86909"> Ztore </font> </a>
            <div class="navbar">
                <ul>
                    <li> <a href="index.php"> HOME </a></li>
                    <li> <a href="index.php"> PRODUCT </a></li>
                    <li> <a href="order.php"> ORDER </a></li>
                    <li> <a href="about.php"> ABOUT ME </a></li>
                    <li>
                        <label>
                            <input type="checkbox" class="checkbox" id="tombol">
                            <span class="check"></span>
                        </label>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="tampilanForm">
            <div class="form">
                <form method="post" action="tampil.php">
                    <h2>Tampilan Pesanan</h2>
                    <div class="order-detail">
                        <div class="input">
                            <span class="detail"> Nama Lengkap </span>
                            <input class="data" name="nama" value="<?php 
                                $nama = $_POST['nama'];  
                                echo $nama;
                                ?>" readonly>
                        </div>
                        <div class="input">
                            <span class="detail"> Alamat Email </span>
                            <input class="data" name="email" value="<?php
                                $email = $_POST['email'];  
                                echo $email;
                                ?>" readonly>
                        </div>
                        <div class="input">
                            <span class="detail"> Nomor HP </span>
                            <input class="data" name="no_hp" value="<?php 
                                $no_hp = $_POST['no_hp'];  
                                echo $no_hp;
                            ?> " readonly>
                        </div>
                        <div class="input">
                            <span class="detail"> Merk HP </span>
                            <input class="data" name="merk" value="<?php 
                                $merk = $_POST['merk'];  
                                echo $merk;
                            ?> " readonly>
                        </div>
                        <div class="input">
                            <span class="detail"> Jumlah Order </span>
                            <input class="data" name="jumlah" value="<?php 
                                $jumlah = $_POST['jumlah'];  
                                echo $jumlah;
                            ?> " readonly>
                        </div>
                        <div class="input">
                            <span class="detail"> Alamat Lengkap </span>
                            <input class="data" name="alamat" value="<?php 
                                $alamat = $_POST['alamat'];  
                                echo $alamat;
                            ?> " readonly>
                        </div>
                        <div class="input" id="met">
                            <span class="detail"> Metode Pembayaran </span>
                            <input class="data" name="metode" value="<?php 
                                $metode = $_POST['metode'];  
                                echo $metode;
                            ?> " readonly>
                        </div>
                        <div>
                            <span class="balik"> <a href="order.php" > Kembali </a> <a href="index.php"> HOME </a> </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
            
    </div>
    
    <div class="bawah">
        <!-- footer -->
        <footer>
            <div class="footer">
                <p>
                    Jangan lupa belanja di AnharZtore, serta follow akun ig saya <a href="https://www.instagram.com/anharrrrrr_/" id="ig"> @anharrrrrr_ </a> 
                    <br>
                    Demikian tampilan web posttest 2 saya, wassalamualaikum warahmatullahi wabarakatuh
                </p>
            </div>
            <div id="kontak">
                <i class="fa fa-whatsapp"> 085845723207 </i>
                <i class="fa fa-instagram"> anharrrrrr_ </i>
                <i class="fa fa-envelope-o"> anharkhoirun@gmail.com </i>
                <i class="fa fa-github"> Anhar12 </i>
            </div>
            <p> @Copyright 2022 - anharrrslbw - Made with HTML & CSS </p>
        </footer>
    </div>
    <script src="scriptorder.js"></script>
</body>
</html>
