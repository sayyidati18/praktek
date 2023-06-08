<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "uprakxi";

    $db = mysqli_connect($server, $user, $password, $nama_database);

    if( !$db ){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }

?>

<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "uprakxi";
    $conn = mysqli_connect($server, $user, $pass, $database);
    if (!$conn) {
        die("<script>alert('Gagal tersambung dengan database.')</script>");
    }
?>