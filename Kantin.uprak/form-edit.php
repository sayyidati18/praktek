<?php

    include("config.php");

    // kalau tidak ada id di query string
    if( !isset($_GET['id']) ){
        header('Location: list-makanan.php');
    }

    //ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM ukk_makanan WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $ukk_makanan = mysqli_fetch_assoc($query);

    // jika data yang di-edit tidak ditemukan
    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Halaman Edit Menu | Restoran D'Artagnan</title>

    <style>
        body {
            background-image: url("https://portal.merauke.go.id/files/restoran.jpg");
        }

        button {
            background-color: #6c5ce7;
            border-color: #a29bfe;
            border-radius: 5px;
            padding: 2.5px 2.5px 2.5px 2.5px;
        }
    </style>
</head>

    <body>
        <div class="container" style="background: linear-gradient(90deg, #394867, #3C486B);">

            <form action="proses-edit.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <header>
                                <h3>Edit Menu</h3>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $ukk_makanan['id'] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td><label for="nama_makanan" style="color: white;">Nama Makanan : </label>
                        <input type="text" name="nama_makanan" placeholder="Masukkan Nama Menu Makanan" value="<?php echo $ukk_makanan['nama_makanan'] ?>" style="width: 300px; border-radius: 5px; border-color: #a29bfe;" /></td>
                    </tr>
                    <tr>
                        <td><label for="harga" style="color: white;">Harga : </label>
                        <input type="text" name="harga" placeholder="Masukkan Harga Makanan" value="<?php echo $ukk_makanan['harga'] ?>" style="width: 300px; border-radius: 5px; border-color: #a29bfe;" /></td>
                    </tr>
                    <tr>
                        <td><label for="stok" style="color: white;">Stok : </label>
                        <input type="text" name="stok" placeholder="Masukkan Jumlah Stok Makanan" value="<?php echo $ukk_makanan['stok'] ?>" style="width: 300px; border-radius: 5px; border-color: #a29bfe;" /></td>
                    </tr>
                    <tr>
                        <td><label for="kategori" style="color: white;">Kategori : </label>
                        <?php $kategori = $ukk_makanan['kategori']; ?></td>
                    </tr>
                    <tr>
                        <td><select name="kategori" style="border-radius: 5px; border-color: #a29bfe;">
                            <option <?php echo ($kategori == 'Makanan Berat') ? "selected": "" ?>>Makanan Berat</option>
                            <option <?php echo ($kategori == 'Makanan Ringan') ? "selected": "" ?>>Makanan Ringan</option>
                            <option <?php echo ($kategori == 'Minuman') ? "selected": "" ?>>Minuman</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="deskripsi" style="color: white;">Deskripsi : </label>
                        <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi Makanan" value="<?php echo $ukk_makanan['deskripsi'] ?>" style="width: 300px; border-radius: 5px; border-color: #a29bfe;" /></td>
                    </tr>
                    <tr>
                        <td><label for="kode_makanan" style="color: white;">Kode Makanan : </label>
                        <input type="text" name="kode_makanan" placeholder="Masukkan Kode Makanan" value="<?php echo $ukk_makanan['kode_makanan'] ?>" style="width: 300px; border-radius: 5px; border-color: #a29bfe;" /></td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Simpan" name="simpan" style="color: #fff; background-color: #6c5ce7; border-color: #a29bfe; border-radius: 5px; padding: 2.5px 2.5px 2.5px 2.5px;" /></td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td><p><button><a href="halaman-depan.php" style="color: #fff; text-decoration: none;">Kembali Ke Halaman Depan</a></button></p></td>
                    </tr>
                    <tr>
                        <td><p><button><a href="list-makanan.php" style="color: #fff; text-decoration: none;">Menuju Ke Halaman Menu Makanan</a></button></p></td>
                    </tr>
                </table>   
            </form>

        </div>
    </body>
</html>