<?php

class Connection{
  public $host = "localhost";
  public $user = "root";
  public $password = "";
  public $db_name = "utspbwl";
  public $conn;

  public function __construct(){
    $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
  }
  function tampildata(){
    $data = mysqli_query($this->conn, "select * from tb_category");
    while ($row = mysqli_fetch_array($data)){
      $hasil[] = $row;
    }
    return $hasil;
  }

  function tambahdata($category_name){
    mysqli_query($this->conn, "insert into tb_category values('','$category_name')");
  }
function get_by_id($category_id)
    {
        $query = mysqli_query($this->conn,"select * from tb_category where category_id='$category_id'");
        return $query->fetch_array();
    }

    function editdata($category_name,$category_id)
  {
    $query = mysqli_query($this->conn,"update tb_category set category_name='$category_name' where category_id='$category_id'");
  }
  function deletedata($category_id)
  {
    $query = mysqli_query($this->conn,"delete from tb_category where category_id='$category_id'");
  }

 function tampilproduk(){
    $data = mysqli_query($this->conn, "select * from tb_product");
    while ($row = mysqli_fetch_array($data)){
      $hasil[] = $row;
    }
    return $hasil;
  }

}
?>

