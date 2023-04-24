<?php 
session_start();
if(!isset($_SESSION["login"]) ){
    header( "Location: ../login.php"); 
}
require '../function.php';

// $mahasiswa = query(" SELECT * FROM user ");

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drill And Practice SMPN39 Semarang</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
 
    <style>
        <?php include "../style.css" ?>
    </style>

       

</head>
  <body>
    <div id="wrapper">
        <div class="wrappernavbar">
            <div class="navbar">
                <ul>
                    <!-- <div class="hamburger">
                    <i class="fa-solid fa-bars"></i>
                    </div> -->
                </ul>
                <ul>
                    <div class="home">
                        <a href="../index.php">
                            <i class="fa-solid fa-house"></i>
                            <p>Beranda</p> 
                        </a>
                    </div>
                </ul>

                <ul>
                <a href="../materi.php">
                    <div class="materi">
                        <img src="../image/materi.png" alt="">
                        <p>Materi</p>
                    </div>
                </a>
                </ul>

                <ul>
                <a href="../latihan.php">
                    <div class="latihan">
                        <img src="../image/latihan.png" alt="">
                        <p>Latihan</p>
                    </div>
                </a>
                </ul>

                <ul>
                <a href="../profile.php">
                    <div class="profile">
                        <img src="../image/profile.png" alt="">
                        <p>Profile</p>
                    </div>
                </a>
                </ul>
            </div>
        </div>

        <div class="wrapperheader">

                <div class="salam">
                    <h1>Pembahasan Soal Nomor 7</h1>
                </div>
                <!-- <div class="logout">
                    <a href="logout.php">Logout</a>
                </div> -->

        </div>
    
        <div class="isi">
            
        <ul class="tujuanpembelajaran">
       
        <h3>Toko Alat tulis memberikan diskon 10% untuk semua alat tulis. Pensil mendapatkan diskon 5%. Harga pensil tersebut 1000. Berapa harga yang harus dibayarkan untuk pensil tersebut….</h3>
        <br>
        <h1>Penyelesaian Soal</h1>
        <br>
        <h3>Diketahui :</h3>
        <h3>Diskon 1 = 10%</h3>
        <h3>Diskon 2 = 5%</h3>
        <h3>Harga Pensil = 1000</h3>
        <br>
        <h1>Diskon = Harga x Presentase</h1>
        <h3>Diskon 1 = 1000 x 10/100</h3>
        <h3>Diskon 1 = 100</h3>
        <h3>Harga setelah diskon 1 = 1000 - 100</h3>
        <h3>Harga setelah diskon 1 = 900</h3>
        <h3>Diskon 2 = 900 x 5/100</h3>
        <h3>Diskon 2 = 45</h3>
        <h3>Harga setelah diskon 2 = 900-45 = 855</h3>


        <div class="wrapperbutton"></div>
        <div class="buttonprev">
            <a href="soal6.php"><h1>Kembali</h1></a>
        </div>
        <div class="buttonnext">
            <a href="soal8.php"><h1>Lanjut</h1></a>
        </div>
        <div class="buttonnext2">
            <a href="../latihan/pembahasan1.php"><h1>Pembahasan</h1></a>
        </div>
        </div>

        </ul>
        </div>





    </div>








  </body>
</html>