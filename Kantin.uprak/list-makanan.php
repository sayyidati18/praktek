<?php 

    include("config.php"); 

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>List Menu Makanan | Restoran D'Artagnan</title>

    <style>
        body {
            background-color: #1746A2;
            color: white;
        }
        
        table {
            background: linear-gradient(90deg, #6c5ce7, #a29bfe);
            border-color: #a29bfe;
            border-radius: 5px;
            padding: 10px 10px 10px 10px;
        }
    </style>
</head>

    <left>
        <body>
            <table border="0">
                <tr>
                    <td>
                        <header>
                            <h3>Menu Makanan Yang Sudah Terdaftar</h3>
                        </header>
                    </td>
                </tr>
                <tr>
                    <td>
                        <nav>
                            <a href="form-daftar.php" style="color: white; text-decoration: none;">[+] Tambah Baru</a>
                        </nav>
                    </td>
                </tr>
                <tr>
                    <td>
                        <nav>
                            <a href="halaman-depan.php" style="color: #fff; text-decoration: none;">[<-] Kembali Ke Halaman Depan</a>
                        </nav>
                    </td>
                </tr>
            </table>

            <br>

            <table border="1" style="text-align: center;">
                <thead>
                    <tr>
                        <th>Nama Makanan</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Kode Makanan</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">

                    <tr>

                        <?php
                        $sql = "SELECT * FROM ukk_makanan";
                        $query = mysqli_query($db, $sql);

                        while($ukk_makanan = mysqli_fetch_array($query)){
                            echo "<tr>";

                            echo "<td>".$ukk_makanan['nama_makanan']."</td>";
                            echo "<td>".$ukk_makanan['harga']."</td>";
                            echo "<td>".$ukk_makanan['stok']."</td>";
                            echo "<td>".$ukk_makanan['kategori']."</td>";
                            echo "<td>".$ukk_makanan['deskripsi']."</td>";
                            echo "<td>".$ukk_makanan['kode_makanan']."</td>";

                            echo "<td>";
                            echo "<a style='color: white; text-decoration: none;' href='form-edit.php?id=".$ukk_makanan['id']."'>Edit</a> | ";
                            echo "<a style='color: white; text-decoration: none;' href='hapus.php?id=".$ukk_makanan['id']."'>Hapus</a>";
                            echo "</td>";

                            echo "</tr>";
                        }
                        ?>

                    </tr>

                </tbody>
            </table>

            <br>

            <table border="0">
                <tr>
                    <td>
                        <header>
                            <p>Total : <?php echo mysqli_num_rows($query) ?></p>
                        </header>
                    </td>
                </tr>
            </table>

        </body>
    </left>
</html>