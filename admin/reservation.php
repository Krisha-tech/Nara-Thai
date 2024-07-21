<?php

include 'connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_users = $conn->prepare("DELETE FROM `users` WHERE id = ?");
   $delete_users->execute([$delete_id]);
   $delete_order = $conn->prepare("DELETE FROM `orders` WHERE user_id = ?");
   $delete_order->execute([$delete_id]);
   $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
   $delete_cart->execute([$delete_id]);
   header('location:users_accounts.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>users accounts</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="admin_style.css">

</head>
<body>

<?php include 'admin_header.php' ?>

<!-- user accounts section starts  -->

<section class="accounts">

   <h1 class="heading">– Reservation Details –</h1>

   <div class="box-container">

   <?php
      $select_account = $conn->prepare("SELECT * FROM `reservation`");
      $select_account->execute();
      if($select_account->rowCount() > 0){
         while($fetch_accounts = $select_account->fetch(PDO::FETCH_ASSOC)){  
   ?>
   <div class="box">
      <p> Reservation Id: <span><?= $fetch_accounts['reservation_id']; ?></span> </p>
      <p> Name : <span><?= $fetch_accounts['name']; ?></span> </p>
      <p> Email : <span><?= $fetch_accounts['email_address']; ?></span> </p>
      <p> Contact no : <span><?= $fetch_accounts['contact_no']; ?></span> </p>
      <p> Preffered Table : <span><?= $fetch_accounts['preffered_table']; ?></span> </p>
      <p> Reservation Kind : <span><?= $fetch_accounts['reservation_kind']; ?></span> </p>
      <p> Message : <span><?= $fetch_accounts['message']; ?></span> </p>

      <a href="reservation.php?delete=<?= $fetch_accounts['reservation_id']; ?>" class="delete-btn" onclick="return confirm('delete this account?');">delete</a>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no accounts available</p>';
   }
   ?>

   </div>

</section>

<!-- user accounts section ends -->







<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>