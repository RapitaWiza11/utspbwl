<?php
    require 'koneksi.php';
    $db = new Connection();
    $dataproduk = $db->tampilproduk();
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
            <li><a href="profil.php">Profil</a></li>
            <li><a href="datakategori.php">Data Kategori</a></li>
            <li><a href="dataproduk.php">Data Produk</a></li>
            <li><a href="keranjang.php">Keranjang</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </header>
     <!-- content -->
    <div class="section">
        <div class="container">
        <h3>Data Produk</h3>
        <div class="box">
            <p><a href="tambahproduk.php">Tambah Produk</a></p>
           <table border="1" cellspacing="0" class="table">
               <thead>
                   <tr>
                       <th width="60px">No</th>
                       <th>Kategori</th>
                       <th>Nama Produk</th>
                       <th>Harga</th>
                       <th>Dekripsi</th>
                       <th>Status</th>
                       <th width="150px">Aksi</th>
                   </tr>
               </thead>
               <tbody>
                   <?php
                   $no = 1;
                   foreach ($dataproduk as $row ) {
                    // code...
                ?>
                   <tr>
                       <td><?php echo $no++ ?></td>
                       <td>KTG-<?php echo $row['category_id'] ?></td>
                       <td><?php echo $row['namaproduk'] ?></td>
                       <td>Rp. <?php echo $row['hargaproduk'] ?></td>
                       <td><?php echo $row['deskripsiproduk'] ?></td>
                       <td><?php echo $row['statusproduk'] ?></td>

                       <td>
                           <a href="editproduk.php?id=<?php echo $row['product_id'] ?>"> Edit</a> || 
                           <a href="hapusproduk.php?id=<?php echo $row['product_id'] ?>" onclick= "return confirm('Yakin ingin menghapus data ini?')" >Hapus</a>                      
                        </td>
                   </tr>
                
                  <?php } ?>
               </tbody>
           </table> 
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