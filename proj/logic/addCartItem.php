<?php

include './connection.php';
 
$ItemId = $_GET['itemId'];
$ItemName = $_GET['itemName'];
$ItemImage = $_GET['itemImage'];
$ItemQty = $_GET['itemQty'];
$ItemPrice = $_GET['itemPrice'];
$ItemTotalPrice =$ItemQty * $ItemPrice;



$sql = "INSERT INTO `nara thai`.`cart` (`itemId`, `name`, `image`, `qty`, `price`, `totalPrice`) VALUES ($ItemId, '$ItemName', '$ItemImage', $ItemQty, $ItemPrice, $ItemTotalPrice);";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location:../menu.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>