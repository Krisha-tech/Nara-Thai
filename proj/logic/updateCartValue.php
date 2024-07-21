<?php

include './connection.php';
 
$id = $_GET['id'];
$ItemQty = $_GET['itemQty'];
$ItemPrice = $_GET['itemPrice'];
$funtion = $_GET['funtion'];
$ItemNewQty = 0;

if($funtion != 'add' && $ItemQty == 1){
    header('Location:../menu.php');
    exit;
}

if($funtion == 'add'){
    $ItemNewQty = $ItemQty + 1;
}else{
    $ItemNewQty = $ItemQty - 1;
}


$ItemTotalPrice =$ItemNewQty * $ItemPrice;

$sql = "UPDATE `nara thai`.`cart` SET `qty`=$ItemNewQty, `price`=$ItemPrice, `totalPrice`=$ItemTotalPrice  WHERE  `id`= $id;";

if ($conn->query($sql) === TRUE) {
  echo " record updated successfully";
  header('Location:../menu.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>