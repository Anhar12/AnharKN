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

    <!-- main content -->
        <div class="form">
            <form method="post" action="tampil.php">
                <h2>Form Order</h2>
                <div class="order-detail">
                    <div class="input">
                        <span class="detail"> Nama Lengkap </span>
                        <input name="nama" type="text" maxlength="40" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    <div class="input">
                        <span class="detail"> Alamat Email </span>
                        <input name="email" type="text" maxlength="40" placeholder="Masukkan Email" required>
                    </div>
                    <div class="input">
                        <span class="detail"> Nomor HP </span>
                        <input name="no_hp" type="tel" pattern="[0-9]{4} [0-9]{4} [0-9]{4}" maxlength="15" placeholder="08xx xxxx xxxx" required>
                    </div>
                    <div class="input">
                        <span class="detail"> Merk HP </span>
                        <select name="merk">
                            <option value=""></option>
                            <option value="Samsung J2 Optimus Prime"> Samsung J2 Optimus Prime </option>
                            <option value="Iphone XN*X 16 Pro MaXX"> Iphone XN*X 16 Pro MaXX </option>
                            <option value="Vivo ASIKK 2022"> Vivo ASIKK 2022 </option>
                            <option value="Realme Ayam++"> Realme Ayam++ </option>
                            <option value="Oddo SmartPeople"> Oddo SmartPeople </option>
                            <option value="Xing Ceng Hanji"> Xing Ceng Hanji </option>
                        </select>
                    </div>
                    <div class="input">
                        <span class="detail"> Jumlah Order </span>
                        <input name="jumlah" min="1" type="number" placeholder="Masukkan Jumlah Order" required>
                    </div>
                    <div class="input">
                        <span class="detail"> Alamat Lengkap </span>
                        <input name="alamat" type="text" maxlength="40" placeholder="Masukkan Alamat Lengkap" required>
                    </div>
                    <div class="metodePembayaran">
                        <input type="radio" name="metode" id="dot1" required value="Cash">
                        <input type="radio" name="metode" id="dot2" required value="Online">
                        <input type="radio" name="metode" id="dot3" required value="Lainnya">
                        <span class="pembayaran"> Metode Pembayaran </span>
                        <div class="method">
                            <label for="dot1">
                                <span class="dot one"></span>
                                <span class="metode"> Cash </span>
                            </label>
                            <label for="dot2">
                                <span class="dot two"></span>
                                <span class="metode"> Online </span>
                            </label>
                            <label for="dot3">
                                <span class="dot three"></span>
                                <span class="metode"> Lainnya </span>
                            </label>
                        </div>
                    </div>
                    <div class="submitButton">
                        <input type="submit" value="Submit">
                    </div>
                </div>
            </form>
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