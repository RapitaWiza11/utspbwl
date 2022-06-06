<?php 
 include('koneksi.php');
 $db = new Connection();
 $category_id = $_GET['id'];
 if(! is_null($category_id)){
    $datakategori = $db->get_by_id($category_id);
 }else{
    header('location:datakategori.php');
 }
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
        <h3>Edit Data Kategori</h3>
        <div class="box">
          <form method="POST" action="proses.php?action=edit" >
            <input type="hidden" name="category_id" value="<?php echo $datakategori['category_id']; ?>">
          <input type="text" name="category_name" placeholder="Nama Kategori" class="input-control" value="<?php echo $datakategori['category_name']; ?>" required>
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