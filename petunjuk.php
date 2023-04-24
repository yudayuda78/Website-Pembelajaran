<?php 
session_start();
if(!isset($_SESSION["login"]) ){
    header( "Location: login.php"); 
}
require 'function.php';

// $mahasiswa = query(" SELECT * FROM user ");

?>







<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
                    <!-- <div class="hamburger">
                    <i class="fa-solid fa-bars"></i>
                    </div> -->
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

        <div class="wrapperheader">

                <div class="salam">
                    <h1> Petunjuk Penggunaan</h1>
                </div>
                <!-- <div class="logout">
                    <a href="logout.php">Logout</a>
                </div> -->

        </div>
    
        <div class="isi">
            
        <ul class="tujuanpembelajaran">
        <li>
            <h1>Petunjuk Penggunaan Tombol</h1>
        </li>
        <li>
            <h1>1. <img src="image/home.png" alt=""> Tombol Home digunakan untuk ke beranda atau home</h1>
        </li>
        <li>
            <h1>2. <img src="image/materi.png" alt=""> Tombol "materi" digunakan untuk masuk pada menu materi</h1>
        </li>
        <li>
            <h1>3. <img src="image/latihan.png" alt="">Tombol "latihan digunakan untuk masuk pada menu latihan</h1>
        </li>
        <li>
            <h1>4. <img src="image/profile.png" alt="">Tombol "profile" digunakan untuk masuk pada menu profil</h1>
        </li>
        
        <br>
        <br>
        <br>
        
        <li>
            <h1>Petunjuk Belajar</h1>
        </li>
        <li>
            <h1>1. Pertama, pengguna memahami capaian dan tujuan pembelajaran</h1>
        </li>
        <li>
            <h1>2. Pengguna memahami materi yang tersedia pada fitur "materi"</h1>
        </li>
        <li>
            <h1>3. Pengguna melakukan latihan soal pada menu "latihan soal"</h1>
        </li>
        <li>
            <h1>4. Pengguna melakukan evaluasi pada menu "evaluasi"</h1>
        </li>
        <li>
            <h1>5. Hasil latihan soal dan evaluasi pengguna dapat dilihat pada hasil pembelajaran</h1>
        </li>


        <div class="wrapperbutton"></div>
        <div class="buttonprev">
            <a href="index.php"><h1>Kembali</h1></a>
        </div>
        <!-- <div class="buttonnext">
            <a href="rugi4.php"><h1>Lanjut</h1></a>
        </div> -->
        </div>
        </ul>



 
        </div>





    </div>








  </body>
</html>