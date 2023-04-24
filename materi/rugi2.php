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
       
        <h1> Cara Mencari Presentase Rugi </h1>
        <br>
        <h1 class="rumusmath">Presentase Rugi = \( \frac{rugi}{harga\;pembelian} \times 100\% \)</h1>
        <br>
        <h1 class="rumusmath">Presentase Rugi = \( \frac{harga\;beli - harga\;jual}{harga\;pembelian} \times 100\% \)</h1>
        <br>
        <div class="buttonnext">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tHE7kVW4rWk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <br>
        <h1>Contoh</h1>
        <br>
        <h3>Andi membeli sepeda motor dengan harga Rp 7.500.000,00. Sepeda motor tersebut diperbaiki dengan biaya Rp 500.000,00 kemudian dijual dan laku RP 7.750.000,00. Tentukan berapa persen kerugiannya!</h3>
        <br>
        <img src="../image/motor.png" alt="motor" class="gambartengah">
        <br>
        <h1>Penyelesaian Soal</h1>
        <br>
        <h3>Diketahui :</h3>
        <h3>Harga pembelian = Rp 7.500.000</h3>
        <h3>Biaya perbaikan  = Rp 500.000</h3>
        <br>
        <h3>Modal = Harga pembelian + Harga Perbaikan</h3>
        <h3>Modal = 7.500.000 + 500.000</h3>
        <h3>Modal = 8.000.000</h3>
        <br>
        <h3>Rugi = Modal - Harga Jual</h3>
        <h3>Rugi = 8.000.000 - 7.750.000</h3>
        <h3>Rugi = 250.000</h3>
        <br>
        <h3>Presentase Rugi = \( \frac{250.000}{8.000.000} \times 100\% \)</h3>
        <br>
        <h3>Presentase Rugi = 3,125%</h3>
        <br>
        <h3>Jadi Presentase kerugian 3,125%</h3>



        <div class="wrapperbutton"></div>
        <div class="buttonprev">
            <a href="rugi1.php"><h1>Kembali</h1></a>
        </div>
        <div class="buttonnext">
            <a href="rugi3.php"><h1>Lanjut</h1></a>
        </div>
        </div>

        </ul>
        </div>





    </div>








  </body>
</html>