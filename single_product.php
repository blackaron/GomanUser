<?php
require_once 'dbConnect.php';

$id = $_GET['id_restoran'];
$sql = "SELECT * FROM products WHERE id_restoran=$id";

$r = mysqli_query($conn, $sql);

$result = array();

while ($row = mysqli_fetch_array($r)){
    array_push($result,array(
        "id_restoran"=>$row['id_restoran'],
        "id_product"=>$row['id_product'],
        "nama_product"=>$row['nama_product'],
        "fotoProduk"=>$row['fotoproduk'],
        "harga"=>$row['harga']
    ));
}

echo json_encode($result);
mysqli_close($con);

?>