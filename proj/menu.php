<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu page</title>
    <link rel="stylesheet" href="menu.css" />
    <link rel="stylesheet" href="cart.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="script.js" defer></script>
    
  </head>
  <body>
    <header>
      <div class="navigation">
        <!--navigation bar-->
        <div class="logo">
          <img src="./images/nara.jpeg" alt="" />
        </div>
        <ul class="links">
        <li><a href="../Home.php">Home</a></li>
          <li><a href="../About.html">About</a></li>
          <li><a id="active-link"  class='showHideCategoryDropDown'  >Menu</a></li>
          <li><a href="../Gallery.html">Gallery</a></li>
          <li><a href="../Reservation">Reservation</a></li>
          <li><a href="../feedback/Contact.php">Contact</a></li>
          <div class='navCartWrap'>
            <i class='bx bx-cart cart-btn'></i>
            <span class='navCartCount'>
              <?php 
                include 'logic/connection.php';
                $sql = "SELECT COUNT('id') AS'result' FROM cart;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo  $row["result"];
                  }
                } else {
                  echo "0 results";
                } 
                ?>

            </span>
          </div>
          <button class="login-btn">Signup</button>
        </ul>
        <div class='categoryDropDown' id='categoryDropDown'>
              <li><a href="#section-2">Best Selling Dishes and Appetizers</a></li>
              <li><a href="#section-3">Soup & Curries</a></li>
              <li><a href="#section-5">Thai Chicken and Mutton Specials</a></li>
              <li><a href="#section-6">Best Selling Sea Food Dishes</a></li>
            </div>
      </div>
    </header>
    
<!--sign up/register-->
    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
        <span class="close-btn material-symbols-rounded">close</span>
        <div class="form-box login">
            <div class="form-details">
               <!-- <h2>Welcome Back</h2>
                <p>Please log in using your personal information to stay connected with us.</p>-->
            </div>
            <div class="form-content">
              
              
                <h2>LOGIN</h2>
                <form action="userlogin.php" method = "Post">
                    <div class="input-field">
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <a href="#" class="forgot-pass-link">Forgot password?</a>
                    <button class="login-button" type="submit">Sign up</button>
                </form>
                <div class="bottom-link">
                    Don't have an account?
                    <a href="#" id="signup-link">Signup</a>
                </div>
            </div>
        </div>
        <div class="form-box signup">
            <div class="form-details">
                <!--<h2>Create Account</h2>
                <p>To become a part of our community, please sign up using your personal information.</p>-->
            </div>
            <div class="form-content">
                <h2>SIGNUP</h2>
                <form action="userregister.php" method = "Post">
                    <div class="input-field">
                        <input type="email" name="email" required>
                        <label>Enter your email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" required>
                        <label>Create password</label>
                    </div>
                    <div class="policy-text">
                        <input type="checkbox" id="policy">
                        <label for="policy">
                            I agree the
                            <a href="#" class="option">Terms & Conditions</a>
                        </label>
                    </div>
                    <button class="login-button" type="submit">Sign Up</button>
                </form>
                <div class="bottom-link">
                    Already have an account? 
                    <a href="#" id="login-link">Login</a>
                </div>
            </div>
        </div>
    </div>

    
      <div class='cart-section' id = "cart">
         
 
      <div class='cartList'>
<?php  
                include 'logic/connection.php';
                $sql1 = "SELECT * FROM cart ";
                $menu1Result = mysqli_query($conn,$sql1);

                if ($menu1Result->num_rows > 0) {
                  // output data of each row
                  $subTotal = 0;
                  while($menu1Row = $menu1Result->fetch_assoc()) {  
                    $subTotal = $subTotal + $menu1Row['totalPrice'];
            ?>
                 
                <article class="product">
                  <header>
                    <a href='./logic/removeCartItem.php?id=<?php echo $menu1Row['id'] ?>' class="remove">
                      <img src="./images/<?php echo $menu1Row['image'] ?>" alt="">

                      <h3>Remove</h3>
                    </a>
                  </header>

                  <div class="content">

                    <h1><?php echo $menu1Row['name'] ?></h1>
                  </div>

                  <div id='footer' class="content ">
                    
                    <a href='./logic/updateCartValue.php?id=<?php echo $menu1Row['id'] ?>&itemQty=<?php echo $menu1Row['qty'] ?>&itemPrice=<?php echo $menu1Row['price'] ?>&funtion=minus'><span class="qt-minus">-</span> </a>
                    <span class="qt"><?php echo $menu1Row['qty'] ?></span>
                     <a href='./logic/updateCartValue.php?id=<?php echo $menu1Row['id'] ?>&itemQty=<?php echo $menu1Row['qty'] ?>&itemPrice=<?php echo $menu1Row['price'] ?>&funtion=add'><span class="qt-plus">+</span> </a>

                    <h2 class="full-price">
                      RS <?php echo $menu1Row['totalPrice'] ?> .00
                    </h2>

                    <h2 class="price">
                      RS <?php echo $menu1Row['price'] ?> .00
                    </h2>
                  </div>
                </article>
            <?php
                  }
                } else {
                  echo "No item found";
                }
                $conn->close();
            ?>  
	</div>

	<footer id="site-footer">
		<div class="container clearfix">

			<div class="left"> 
			</div>

			<div class="right">
				<h1 class="total">Total: Rs <span><?php echo  $subTotal ?>.00</span></h1>
				<a class="btn" >Checkout</a>

			</div>

		</div>
      </div>
      
    <section class="section-1">
      <!--section-1-->

      <div class="topic">
        <h1>
          Nara Thai Menu &nbsp;
          <img src="./images/system-regular-93-pizza-slice (1).gif" alt="" />
        </h1>
      </div>
    </section>

    <section class="section-2" id='section-2'>
      <!--section-2-->

      <div class="menu-container-1 relative">

  <h1 style="color: rgb(108, 92, 2);">- Best Selling Dishes and Appetizers -</h1>
  <button class="closeButton">Hide Items</button>
  <div class="menu-row">
        <div id="first" class="menu-1">
          <!-- <img
            src="./images/kisspng-casa-del-sole-pizza-fast-food-menu-0-pizza-menu-5b30c8752be3d2.4638584815299237011798.png"
            alt=""
          />
        </div> -->
      
           <?php  
                include 'logic/connection.php';
                $sql1 = "SELECT * FROM menu WHERE menu.itemCategory = 'Best Selling Dishes and Appetizers'";
                $menu1Result = mysqli_query($conn,$sql1);

                if ($menu1Result->num_rows > 0) {
                  // output data of each row
                  while($menu1Row = $menu1Result->fetch_assoc()) {  
            ?>
                   <div class="box-image">
                      <img style="width: 200px; height: 200px;" src="./images/<?php echo $menu1Row["itemImage"] ?>" alt="">
                      <h2><?php echo $menu1Row["itemName"] ?> </h2>
                      <h2>RS <?php echo $menu1Row["itemPrice"] ?></h2>
                      <h4><?php echo $menu1Row["itemDescription"] ?></h4>
                      <a class='addToCart' href = "./logic/addCartItem.php?itemId=<?php echo $menu1Row['itemId'] ?>&itemName=<?php echo $menu1Row['itemName'] ?>&itemImage=<?php echo $menu1Row['itemImage'] ?>&itemQty=1&itemPrice=<?php echo $menu1Row['itemPrice'] ?>">Add to cart</a>

                    </div>
            <?php
                  }
                } else {
                  echo "No item found";
                }
                $conn->close();
            ?> 
        
      </div>
        
      </div>
    </section> 
    <section class="section-3" id='section-3'>
      <!--section-3-->
      <div class="menu-container-2 relative">
        <h1>- Soup & Curries-</h1>
        <button class="closeButton">Hide Items</button>
        <!-- <div class="menu-2">
          <img src="./images/Screenshot 2023-12-11 133930.png " alt="" />
        </div> -->
        <div class='menu-row'>
          <div id="soup" class="menu-1 ">
          <!-- <img
            src="./images/kisspng-casa-del-sole-pizza-fast-food-menu-0-pizza-menu-5b30c8752be3d2.4638584815299237011798.png"
            alt=""
          />
        </div> -->
          <?php  
                include 'logic/connection.php';
                $sql1 = "SELECT * FROM menu WHERE menu.itemCategory = 'Soup & Curries'";
                $menu1Result = mysqli_query($conn,$sql1);

                if ($menu1Result->num_rows > 0) {
                  // output data of each row
                  while($menu1Row = $menu1Result->fetch_assoc()) {  
            ?>
                   <div class="box-image">
                      <img style="width: 200px; height: 200px;" src="./images/<?php echo $menu1Row["itemImage"] ?>" alt="">
                      <h2><?php echo $menu1Row["itemName"] ?> </h2>
                      <h2>RS <?php echo $menu1Row["itemPrice"] ?></h2>
                      <h4><?php echo $menu1Row["itemDescription"] ?></h4>
                      <a class='addToCart' href = "./logic/addCartItem.php?itemId=<?php echo $menu1Row['itemId'] ?>&itemName=<?php echo $menu1Row['itemName'] ?>&itemImage=<?php echo $menu1Row['itemImage'] ?>&itemQty=1&itemPrice=<?php echo $menu1Row['itemPrice'] ?>">Add to cart</a>
                    </div>
            <?php
                  }
                } else {
                  echo "No item found";
                }
                $conn->close();
            ?> 
      </div>
        </div>
      </div>
    </section>

    

       

    <section class="section-5" id='section-5'>
      <!--section-5-->
      <div class="menu-container-4">
        <h1>- Thai Chicken and Mutton Specials -</h1>
        <!-- <div class="menu-4">
          <img src="./images/Screenshot 2023-12-11 145420.png" alt="" />
        </div> -->
        <button class="closeButton">Hide Items</button>
        <div class="menu-row">
        <div id="meat" class="menu-1">
          <!-- <img
            src="./images/kisspng-casa-del-sole-pizza-fast-food-menu-0-pizza-menu-5b30c8752be3d2.4638584815299237011798.png"
            alt=""
          />
        </div> -->

        <?php  
                include 'logic/connection.php';
                $sql1 = "SELECT * FROM menu WHERE menu.itemCategory = 'Thai Chicken and Mutton Specials'";
                $menu1Result = mysqli_query($conn,$sql1);

                if ($menu1Result->num_rows > 0) {
                  // output data of each row
                  while($menu1Row = $menu1Result->fetch_assoc()) {  
            ?>
                   <div class="box-image">
                      <img style="width: 200px; height: 200px;" src="./images/<?php echo $menu1Row["itemImage"] ?>" alt="">
                      <h2><?php echo $menu1Row["itemName"] ?> </h2>
                      <h2>RS <?php echo $menu1Row["itemPrice"] ?></h2>
                      <h4><?php echo $menu1Row["itemDescription"] ?></h4>
                      <a class='addToCart' href = "./logic/addCartItem.php?itemId=<?php echo $menu1Row['itemId'] ?>&itemName=<?php echo $menu1Row['itemName'] ?>&itemImage=<?php echo $menu1Row['itemImage'] ?>&itemQty=1&itemPrice=<?php echo $menu1Row['itemPrice'] ?>">Add to cart</a>
                    </div>
            <?php
                  }
                } else {
                  echo "No item found";
                }
                $conn->close();
            ?> 
        
        </div>
      </div>
      </div>
    </section>
    <section class="section-2" id='section-6'>
      <!--section-2-->

      <div class="menu-container-1 relative">
        <h1 style="color: rgb(108, 92, 2);">- Best Selling Sea Food Dishes -</h1>
        <button class="closeButton">Hide Items</button>
        <div class="menu-row">
        <div id="first" class="menu-1">
          
          <!-- <img
            src="./images/kisspng-casa-del-sole-pizza-fast-food-menu-0-pizza-menu-5b30c8752be3d2.4638584815299237011798.png"
            alt=""
          />
        </div> -->

         <?php  
                include 'logic/connection.php';
                $sql1 = "SELECT * FROM menu WHERE menu.itemCategory = 'Best Selling Sea Food Dishes'";
                $menu1Result = mysqli_query($conn,$sql1);

                if ($menu1Result->num_rows > 0) {
                  // output data of each row
                  while($menu1Row = $menu1Result->fetch_assoc()) {  
            ?>
                   <div class="box-image">
                      <img style="width: 200px; height: 200px;" src="./images/<?php echo $menu1Row["itemImage"] ?>" alt="">
                      <h2><?php echo $menu1Row["itemName"] ?> </h2>
                      <h2>RS <?php echo $menu1Row["itemPrice"] ?></h2>
                      <h4><?php echo $menu1Row["itemDescription"] ?></h4>
                      <a class='addToCart' href = "./logic/addCartItem.php?itemId=<?php echo $menu1Row['itemId'] ?>&itemName=<?php echo $menu1Row['itemName'] ?>&itemImage=<?php echo $menu1Row['itemImage'] ?>&itemQty=1&itemPrice=<?php echo $menu1Row['itemPrice'] ?>">Add to cart</a>
                    </div>
            <?php
                  }
                } else {
                  echo "No item found";
                }
                $conn->close();
            ?> 
</div>
        
      </div>
    </section>
    <footer>
      <!--footer-->
      <div class="footer-details">

        <div class="logo-footer">
            <img src="./images/nara.jpeg" alt="">
        </div>

        <div class="links-footer">
            <ul>
                <li id="titles">Quick Links</li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Reservation</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
        <div class="hours-footer">
            <ul>
                <li id="titles" >Opening Hours</li>
                <li>MONDAY – THURSDAY</li>
                <li>12.00 – 3.30 PM & 6.30 -10.30 PM</li>
                <li>FRIDAY – SUNDAY</li>
                <li>12.00 – 3.30 PM & 6.30 -10.30 PM</li>
            </ul>
        </div>
      </div>
   
    </footer>
    <script src="./menu.js"></script>
    <script src="./cart.js"></script>
  </body>
</html>
