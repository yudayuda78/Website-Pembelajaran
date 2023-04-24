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
    <title>Drill And Practice SMPN39 Semarang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <style>
        <?php include "style.css" ?>
        ul.tujuanpembelajaran{list-style-type: circle;};
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
                    <h1 style="margin-left: -15px"> Capaian Pembelajaran</h1>
                </div>
                <!-- <div class="logout">
                    <a href="logout.php">Logout</a>
                </div> -->

        </div>
    
        <div class="isi">
            
        <ul class="tujuanpembelajaran2" type="square">

        <li>
            <h1 style="text-align: justify">Peserta didik dapat membaca, menuliskan, dan membandingkan bilangan bulat, bilangan rasional dan irasional, bilangan desimal, bilangan berpangkat bulat dan akar, bilangan dalam notasi ilmiah.</h1>
        </li>
        <hr />
        <li>
            <h1 style="text-align: justify">Mereka dapat menerapkan operasi aritmetika pada bilangan real dan memberikan estimasi/perkiraan dalam menyelesaikan masalah (termasuk berkaitan dengan literasi finansial).</h1>
        </li>
        <hr />
        <li>
            <h1 style="text-align: justify">Peserta didik dapat menggunakan faktorisasi prima dan pengertian rasio (skala, proporsi, dan laju perubahan) dalam penyelesaian masalah</h1>
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