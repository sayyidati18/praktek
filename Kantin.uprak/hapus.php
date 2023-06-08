<?php

include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM ukk_makanan WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: list-makanan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>