<?php
if (@include "dbConnect.php"){
$result = mysqli_query($conn, "SELECT * FROM products");
while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}
echo json_encode($data);
}else{
    echo 'error cannot connected to database';
}


?>