<?php 
 
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Kedai Agita</title>
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="index.php">Kedai Agita</a></h1>
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="datakategori.php">Data Kategori</a></li>
            <li><a href="dataproduk.php">Data Produk</a></li>
            <li><a href="keranjang.php">Keranjang</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </header>
     <!-- content -->
    <div class="section">
        <div class="container">
        <h3>Tambah Data Produk</h3>
        <div class="box">
          <form method="POST" action="prosesproduk.php?action=add">
            <select name="kategori" class="input-control" required>
                <option value="">--Pilih--</option>
                <?php
                    $pilih = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                    while($r = mysqli_fetch_array($pilih)){    
                ?>
                <option value="<?php echo $r['category_id'] ?>"><?php echo $r['category_name'] ?></option>
                <?php } ?>
            </select>
            <input type="text" name="namaproduk" placeholder="Nama Produk" class="input-control" required>
            <input type="text" name="hargaproduk" placeholder="Harga" class="input-control" required>
            <textarea name="deskripsiproduk" class="input-control" placeholder="deskripsi"></textarea>
            <select class="input-control" name="statusproduk">
                <option value="">--Pilih--</option>
                <option value="1">Tersedia</option>
                <option value="0">Habis</option>
            </select>
          <input type="submit" name="submit" value="Submit" class="btn" >
        </form>
       
        </div>
        </div>
    </div>
    
     <!-- footer -->
     <footer>
         <div class="container">
             <small>Copyright &copy; 2022 - Khairaa Ponsel </small>
         </div>
     </footer>
</body>
</html>