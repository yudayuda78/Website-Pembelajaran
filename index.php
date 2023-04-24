<?php 
session_start();
if(!isset($_SESSION["login"]) ){
    header( "Location: login.php"); 
}
require 'function.php';
$username = $_SESSION["username"];
// var_dump($username);
?>







<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drill And Practice SMPN39 Semarang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <style>
        <?php include "style.css" ?>
    </style>
</head>
  <body>
    <div id="wrapper">
        <div class="wrappernavbar">
            <div class="navbar">
                <ul>
                    <div class="hamburger">
                    <!-- <i class="fa-solid fa-bars"></i> -->
                    </div>
                </ul>
                <ul>
                    <div class="home">
                        <a href="index.php">
                            <i class="fa-solid fa-house"></i>
                            <p>Beranda</p> 
                        </a>
                    </div>
                </ul>

                <ul>
                <a href="materi.php">
                    <div class="materi">
                        <img src="image/materi.png" alt="">
                        <p>Materi</p>
                    </div>
                </a>
                </ul>

                <ul>
                <a href="latihan.php">
                    <div class="latihan">
                        <img src="image/latihan.png" alt="">
                        <p>Latihan</p>
                    </div>
                </a>
                </ul>

                <ul>
                <a href="profile.php">
                    <div class="profile">
                        <img src="image/profile.png" alt="">
                        <p>Profile</p>
                    </div>
                </a>
                </ul>
            </div>
        </div>

        <div class="wrapperjudul">
            <div class="judul">
                <h1 class="isijudul">Website Pembelajaran Drill and Practice Matematika</h1>
            </div>
        </div>

        <div class="wrapperheader">

                <div class="salam">
                    <h1> <span>Selamat Datang <?php echo $username  ?></span></h1>
                </div>
                <div class="logout">
                    <a href="logout.php">Logout</a>
                </div>

        </div>

        
    
        <div class="isi">

            <div class="wrapper" id="wrapper-pengembang">
                <a href="capaian.php">
                    <div class="pengembang">
                        <div class="gambar">
                            <img src="image/pengembang.png" alt="">
                        </div>
                        <div class="tulisan">
                            <h1>Capaian Pembelajaran</h1>
                        </div>
                    </div>
                </a>
            </div>

            <div class="wrapper" id="wrapper-komdas">
                <a href="kompetensi.php">
                    <div class="kompetensidasar">
                        <div class="gambar">
                            <img src="image/kompetensi.png" alt="">
                        </div>
                        <div class="tulisan">
                            <h1>Tujuan Pembelajaran</h1>
                        </div>
                    </div>
                </a>
            </div>

            <div class="wrapper" id="wrapper-petpeng">
                <a href="petunjuk.php">
                    <div class="petunjukpenggunaan">
                        <div class="gambar">
                            <img src="image/petunjukpenggunaan.png" alt="">
                        </div>
                        <div class="tulisan">
                            <h1>Petunjuk Penggunaan</h1>
                        </div>
                    </div>
                </a>
            </div>

            <div class="wrapper" id="wrapper-materi2">
                <a href="materi.php">
                    <div class="materi2">
                        <div class="gambar">
                            <img src="image/materi2.png" alt="">
                        </div>
                        <div class="tulisan">
                            <h1>Materi Pembelajaran</h1>
                        </div>
                    </div>
                </a>
            </div>

            <div class="wrapper" id="wrapper-latsoal">
                <a href="latihan.php">
                    <div class="latihansoal">
                        <div class="gambar">
                            <img src="image/latihansoal.png" alt="">
                        </div>
                        <div class="tulisan">
                            <h1>Latihan Soal</h1>
                        </div>
                    </div>
                </a>
            </div>

            <div class="wrapper" id="wrapper-soaleva">
                <a href="evaluasi/evaluasi.php">
                    <div class="soalevaluasi">
                        <div class="gambar">
                            <img src="image/soalevaluasi.png" alt="">
                        </div>
                        <div class="tulisan">
                            <h1>Soal Evaluasi</h1>
                        </div>
                    </div>
                </a>
            </div>

            <div class="wrapper" id="wrapper-hasilpembelajaran">
                <a href="hasilevaluasi.php">
                    <div class="soalevaluasi">
                        <div class="gambar">
                            <img src="image/soalevaluasi.png" alt="">
                        </div>
                        <div class="tulisan">
                            <h1>Hasil Pembelajaran</h1>
                        </div>
                    </div>
                </a>
            </div>

            <div class="wrapper" id="wrapper-pengembang">
                <a href="pengembang.php">
                    <div class="pengembang">
                        <div class="gambar">
                            <img src="image/pengembang.png" alt="">
                        </div>
                        <div class="tulisan">
                            <h1>Tentang Pengembang</h1>
                        </div>
                    </div>
                </a>
            </div>


            <div class="wrapper" id="wrapper-latsoal">
                <a href="tentangwebsite.php">
                    <div class="latihansoal">
                        <div class="gambar">
                            <img src="image/latihansoal.png" alt="">
                        </div>
                        <div class="tulisan">
                            <h1>Tentang Website</h1>
                        </div>
                    </div>
                </a>
            </div>
 
        </div>





    </div>








  </body>
</html>