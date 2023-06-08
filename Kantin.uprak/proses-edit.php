<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama_makanan = $_POST['nama_makanan'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $kode_makanan = $_POST['kode_makanan'];

    $sql = "UPDATE ukk_makanan SET nama_makanan='$nama_makanan', harga='$harga', stok='$stok', kategori='$kategori', deskripsi='$deskripsi', kode_makanan='$kode_makanan' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-makanan.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>