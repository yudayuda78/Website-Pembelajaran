<?php




//koneksi database
$conn = mysqli_connect("localhost", "root", "", "siswasmp");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    };

    return $rows;
};



// function register
function register($data){
    global $conn;

    $username = strtolower( stripslashes( $data["username"] ) );
    $password = $data["password"];
    $nama = $data["nama"];
    $absen = $data["absen"];

    //tambah userbaru ke database
    mysqli_query($conn, "INSERT INTO siswa (username, password, nama, absen) 
    VALUES(
        '$username', '$password', '$nama', '$absen'
    )" );

    return mysqli_affected_rows($conn);

}



?>