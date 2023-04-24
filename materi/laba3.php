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
    <title>Materi Laba</title>
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
                    <h1> Materi Laba</h1>
                </div>
                <!-- <div class="logout">
                    <a href="logout.php">Logout</a>
                </div> -->

        </div>
    
        <div class="isi">
            
        <ul class="tujuanpembelajaran">
       
        <h1> Cara Mencari Harga Beli Jika Presentase Untung Diketahui dan Harga Jual Diketahui</h1>
        <br>
        <h1 class="rumusmath">Harga Jual = \( \frac{harga\;jual}{100\% + presentase\;untung}\)</h1>
        <br>
        <div class="buttonnext">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/tebhHS2TOp8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <h1>Contoh</h1>
        <br>
        <h3>Pak Amir menjual sepedanya dengan harga Rp 550.000,00 dan mendapat untung 25%. Tentukan harga pembelian sepeda tersebut!</h3>
        <br>
        <img src="../image/sepeda.png" alt="sepeda" class="gambartengah">
        <br>
        <h1>Penyelesaian Soal</h1>
        <br>
        <h3>Diketahui :</h3>
        <h3>Harga jual = Rp 550.000</h3>
        <h3>Untung = 25%</h3>
        <br>
        <h3>Harga Beli = Harga Jual : (100% + presentase Untung)</h3>
        <br>
        <h3>Harga beli = Rp 550.000 : \( \frac{125}{100}\)</h3>
        <br>
        <h3>Harga beli = Rp 550.000 x \( \frac{125}{100}\) = Rp 440.000</h3>


        <br>
        <h3>Jadi harga pembelian sepeda Pak Amir adalah Rp 440.000,00</h3>



        <div class="wrapperbutton"></div>
        <div class="buttonprev">
            <a href="laba2.php"><h1>Kembali</h1></a>
        </div>
        <div class="buttonnext">
            <a href="laba4.php"><h1>Lanjut</h1></a>
        </div>
        </div>

        </ul>
        </div>





    </div>








  </body>
</html>