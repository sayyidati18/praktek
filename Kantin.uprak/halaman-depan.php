<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Halaman Depan | Chickenvio</title>

        <style>
            body {
                background-color: #D6E8DB;
                color: white;
            }     
        </style>
    </head>

    <body>
        <div class="container-logout" style="background: linear-gradient(90deg, #00C4FF, #A7ECEE);">
            <form action="" method="POST" class="login-email">
                <?php echo "<h1>Restoran Chickenvio</h1>"; ?>

                <br>

                <?php echo '<h2>Selamat Datang,</h2>'; ?>
                <?php echo '<h2 style="text-decoration: underline;">' . $_SESSION['username'] ."!". "</h2>"; ?>

                <br>

                <?php echo '<h3>Menu</h3>'; ?>
 
                <div class="input-group">
                    <a href="form-daftar.php" class="btn" style="text-decoration: none;">Daftar Menu Makanan Baru</a>
                    <a href="list-makanan.php" class="btn" style="text-decoration: none;">Data Menu Makanan</a>
                    <a href="logout.php" class="btn" style="text-decoration: none;">Logout</a>
                </div>
            </form>
        </div>
    </body>
</html>