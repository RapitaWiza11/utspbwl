<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->login($_POST["usernameemail"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: index.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Wrong Password'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
  </head>
  <body id ="bg-login">
      <div class="box-login">
    <h2>Login - Kedai Agita</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="">Username : </label>
      <input type="text" name="usernameemail" required value="" class="input-control"> <br>
      <label for="">Password</label>
      <input type="password" name="password" required value="" class="input-control"> <br>
      <input type="submit" name="submit" class="btn"></button>
    </form>
    <br>
  </body>
</html>
