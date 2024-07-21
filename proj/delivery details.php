<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $method = $_POST['cash-on-delivery'];
    $payment_status = $_POST[''];

    $conn = new mysqli('127.0.0.1', 'root', '', 'nara thai');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Assuming cart is the name of the table you want to link
    $cart = "SELECT id, name, qty, totalPrice FROM cart ";

    $result = $conn->query($cart);

    if ($result !== false) {
        // Check if any rows are returned
        if ($result->num_rows > 0) {
            // Fetch all rows
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $ItemName = $row['name'];
                $ItemQty = $row['qty'];
                $ItemTotalPrice = $row['totalPrice'];

                // Modify your SQL query to include the linked attributes
                $sql = "INSERT INTO userinfo (id, name, email, contact, address, method, ItemName, qty, totalPrice, OrderDate,payment_status) VALUES 
                        ('$id', '$name', '$email', '$contact', '$address', '$method', '$ItemName', '$ItemQty', '$ItemTotalPrice', NOW()),'$payment_status'";

                if ($conn->query($sql) !== TRUE) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            echo "Order placed successfully!";
        } else {
            echo "No matching records found in cart table.";
        }
    } else {
        echo "Error executing query on cart table: " . $conn->error;
    }

    $conn->close();
}
?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <link rel="stylesheet" href="delivery details.css" >
  </head>
  <body>
    <div class="delivform"><h1>User Details</h1></div>
    <div class="main">
        
    <form action="delivery details.php" method="post"> 
        

        <h2 class="name">Name</h2>
        <input class="name" type="text" name="fullname">
        
        <h2 class="email">Email</h2>
        <input class="email" type="text" name="email">
        
        <h2 class="contact">Contact Number</h2>
        <input class="contact" type="text" name="contact">

        <h2 class="address">Address</h2>
        <input class="address" type="text" name="address">

        <label class="checkbox">
            <input  class ="checkbox-one"   type="checkbox" name="cash-on-delivery">
            <span class ="checkmark"></span>
            Cash on delivery

       <button type="submit">Place your Order</button>
        

    </form>
</div>
  </body>
  </html>