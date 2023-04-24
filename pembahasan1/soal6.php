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
                    <h1>Pembahasan Soal Nomor 6</h1>
                </div>
                <!-- <div class="logout">
                    <a href="logout.php">Logout</a>
                </div> -->

        </div>
    
        <div class="isi">
            
        <ul class="tujuanpembelajaran">
       
        <h3>Toko Buah memberikan diskon 5% untuk semua buah. Buah semangka mendapatkan diskon sebesar 10%. Harga buah semangka tersebut 60.000. Harga yang harus dibayarkan untuk membeli semangka tersebut adalah sebagai berikut…</h3>
        <br>
        <h1>Penyelesaian Soal</h1>
        <br>
        <h3>Diketahui :</h3>
        <h3>Diskon 1 = 5%</h3>
        <h3>Diskon 2 = 10%</h3>
        <h3>Harga Semangka = 60.000</h3>
        <br>
        <h1>Diskon = Harga x Presentase</h1>
        <h3>Diskon 1 = 60.000 x 5/100</h3>
        <h3>Diskon 1 = 3.000</h3>
        <h3>Harga setelah diskon 1 = 60.000 - 3.000</h3>
        <h3>Harga setelah diskon 1 = 57.000</h3>
        <h3>Diskon 2 = 57.000 x 10/100</h3>
        <h3>Diskon 2 = 5.700</h3>
        <h3>Harga setelah diskon = 57.000 - 5.700 = 51.300</h3>


        <div class="wrapperbutton"></div>
        <div class="buttonprev">
            <a href="soal5.php"><h1>Kembali</h1></a>
        </div>
        <div class="buttonnext">
            <a href="soal7.php"><h1>Lanjut</h1></a>
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