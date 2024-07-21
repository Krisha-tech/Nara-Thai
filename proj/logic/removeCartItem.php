<?php

include './connection.php';
 
$id = $_GET['id']; 



$sql = "DELETE FROM `nara thai`.`cart` WHERE  `id`=$id;";

if ($conn->query($sql) === TRUE) {
  echo "record deleted successfully";
  header('Location:../menu.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>