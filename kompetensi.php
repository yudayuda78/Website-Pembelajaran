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
                    <h1> Tujuan Pembelajaran</h1>
                </div>
                <!-- <div class="logout">
                    <a href="logout.php">Logout</a>
                </div> -->

        </div>
    
        <div class="isi">
            
        <ul class="tujuanpembelajaran2">
        <li>
            <h1 style="text-align: justify">Menentukan Laba, Rugi dan Diskon dari permasalahan kontekstual</h1>
        </li>
        <li>
            <h1 style="text-align: justify">Menyelesaikan masalah yang berkaitan dengan operasi aritmatika pada bilangan real sehingga dapat memberikan estimasi/perkiraan hasil operasi aritmatikadengan mengajukan alasan yang masuk akal (argumentasi)	</h1>
        </li>

        <div class="gambarpenuh">
            <img class="gambartujuan" src="image/tujuan.png" alt="">
        </div>

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