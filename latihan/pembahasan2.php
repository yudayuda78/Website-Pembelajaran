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
    <title>Bootstrap demo</title>
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
                    <h1> Pembahasan Soal 1</h1>
                </div>
                <!-- <div class="logout">
                    <a href="logout.php">Logout</a>
                </div> -->

        </div>
    
        <div class="isi">
            
        <ul class="tujuanpembelajaran">
        <div class="kotakpenjelasan">
            <div class="item"><a href="../pembahasan1/soal1.php">Soal Nomor 1</a></div>
            <div class="item"><a href="../pembahasan1/soal2.php">Soal Nomor 2</a></div>
            <div class="item"><a href="../pembahasan1/soal3.php">Soal Nomor 3</a></div>
            <div class="item"><a href="../pembahasan1/soal4.php">Soal Nomor 4</a></div>
            <div class="item"><a href="../pembahasan1/soal5.php">Soal Nomor 5</a></div>
            <div class="item"><a href="../pembahasan1/soal6.php">Soal Nomor 6</a></div>
            <div class="item"><a href="../pembahasan1/soal7.php">Soal Nomor 7</a></div>
            <div class="item"><a href="../pembahasan1/soal8.php">Soal Nomor 8</a></div>
            <div class="item"><a href="../pembahasan1/soal9.php">Soal Nomor 9</a></div>
            <div class="item"><a href="../pembahasan1/soal10.php">Soal Nomor 10</a></div>
            <div class="item"><a href="../pembahasan1/soal11.php">Soal Nomor 11</a></div>
            <div class="item"><a href="../pembahasan1/soal12.php">Soal Nomor 12</a></div>
            <div class="item"><a href="../pembahasan1/soal13.php">Soal Nomor 13</a></div>
            <div class="item"><a href="../pembahasan1/soal14.php">Soal Nomor 14</a></div>
            <div class="item"><a href="../pembahasan1/soal15.php">Soal Nomor 15</a></div>
            <div class="item"><a href="../pembahasan1/soal16.php">Soal Nomor 16</a></div>
            <div class="item"><a href="../pembahasan1/soal17.php">Soal Nomor 17</a></div>
            <div class="item"><a href="../pembahasan1/soal18.php">Soal Nomor 18</a></div>
            <div class="item"><a href="../pembahasan1/soal19.php">Soal Nomor 19</a></div>
            <div class="item"><a href="../pembahasan1/soal20.php">Soal Nomor 20</a></div>
        </div>

        <div class="wrapperbutton"></div>
        <!-- <div class="buttonprev">
            <a href="soal11.php"><h1>Kembali</h1></a>
        </div>
        <div class="buttonnext">
            <a href="soal13.php"><h1>Lanjut</h1></a>
        </div> -->
        <div class="buttonnext2">
            <a href="../latihan.php"><h1>Kembali</h1></a>
        </div>
        </div>





        </ul>

        </div>





    </div>








  </body>
</html>