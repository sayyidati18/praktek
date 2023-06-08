<?php

include("config.php");

if(isset($_POST['daftar'])){

    $id = $_POST['id'];
    $nama_makanan = $_POST['nama_makanan'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $kode_makanan = $_POST['kode_makanan'];

    $sql = "INSERT INTO ukk_makanan (nama_makanan, harga, stok, kategori, deskripsi, kode_makanan) VALUE ('$nama_makanan', '$harga', '$stok', '$kategori', '$deskripsi', '$kode_makanan')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-makanan.php?status=sukses');
    } else {
        header('Location: list-makanan.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>