<?php 
session_start();
if(!isset($_SESSION["login"]) ){
    header( "Location: login.php"); 
}

require 'function.php';

$siswa = query("SELECT * FROM siswa");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <style>
        <?php include "style.css" ?>
        table, th, td{
    border: 1px solid black;
    border-collapse: collapse;
}
    </style>
</head>
<body>
<div id="wrapper">
        <div class="wrappernavbar">
            <div class="navbar">
                <ul>
                    <div class="hamburger">
                    <i class="fa-solid fa-bars"></i>
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

        <div class="wrapperheader">

                <div class="salam">
                    <h1> Hasil Pembelajaran</h1>
                </div>
                <!-- <div class="logout">
                    <a href="logout.php">Logout</a>
                </div> -->

        </div>
    
        <div class="isi">
            
        <ul class="tujuanpembelajaran">
       
        <table  cellpadding="10" cellspacing="0">

            <tr>
                <th>Nama</th>
                <th>Absen</th>
                <th>latihan1</th>
                <th>latihan2</th>
                <th>latihan3</th>
                <th>evaluasi</th>
            </tr>
            <?php foreach( $siswa as $row): ?>
            <tr>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["absen"]; ?></td>
                <td><?php echo $row["latihan1"]; ?></td>
                <td><?php echo $row["latihan2"]; ?></td>
                <td><?php echo $row["latihan3"]; ?></td>
                <td><?php echo $row["evaluasi"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="wrapperbutton"></div>
        <div class="buttonprev">
            <a href="index.php"><h1>beranda</h1></a>
        </div>

        </div>

        </ul>
        </div>





    </div>





</body>
</html>