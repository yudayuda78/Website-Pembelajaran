<?php 
session_start();

require 'function.php';

$username = $_POST["username"];
$_SESSION["username"] = $username;
if (isset($_POST["login"]) ){
  
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM siswa WHERE username = '$username' AND password = '$password'");
  $row = mysqli_fetch_array($result);

//cek username
if( mysqli_num_rows($result) === 1) {

  //set session
  $_SESSION["login"] = true;


  header("Location: index.php");
  exit();

}else{
  echo "username atau password yang anda masukan salah";
}
}



?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
      <?php include "style.css" ?>
    </style>
</head>
  <body>
    <div class="container">
        <img src="image/gambarlogin.png" alt="">
        <h1>Login</h1>
        <form action="" method="POST">
            <ul>
                <li>
                    <label for="username">username</label>
                    <br>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">password</label>
                    <br>
                    <input type="password" name="password" id="password">
                </li>
                <!-- <li>
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">remember me</label>
                
                </li> -->
                <li>
                    <button type="submit" name="login" class="btn btn-primary" value="LOGIN">Login</button>
                </li>
                <li><a href="registrasi.php">Daftar Akun</a></li>
            </ul>
        </form>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>