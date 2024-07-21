<?php
// Connect to the database (update with your database credentials)
$db = new mysqli('127.0.0.1', 'root', '', 'nara thai');

if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}

if (isset($_POST['name']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert the message into the database, marking it as a farmer message
    $query = "INSERT INTO feedback (name, email,message) VALUES ('$name', '$email', '$message')";
    $result = $db->query($query);

    if ($result) {
        // Message sent successfully
        header("Location: Contact.php");
    } else {
        echo "Error: " . $db->error;
    }

    $db->close();
}
?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery</title>
    <link rel="stylesheet" href="Contact.css" />
    <link rel="stylesheet" href="style1.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="script.js" defer></script>
    
  </head>
  <body>
    <header>
      <div class="navigation">
        <!--navigation bar-->
        <div class="logo">
          <img src="img/narathailogo.jpg" alt="" />
        </div>
        <ul class="links">
          <li><a href="../Home.php">Home</a></li>
          <li><a href="../About.html">About</a></li>
          <li><a href="../proj/menu.php">Menu</a></li>
          <li><a href="../Gallery.html">Reservation</a></li>
          <li><a href="../Reservation.html">Reservation</a></li>
          <li><a id="active-link" href="">Contact</a></li>
          <button class="login-btn">Signup</button>
        </ul>
      </div>
    </header>
    <!-- login /Register-->
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
<br>
<br>
<br>
<br>
<br>
    
      <div class="container">
       <!--<span class="big-circle"></span>--> 
        <!--<img src="img/shape.png" class="square" alt="" />-->
        <div class="form">
          <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
              Designed to be the Culinary epicenter, We try to uphold the traditions of the Local Household while bringing out the flavours of Sri Lanka with a bounty of fresh seasonal ingredients.
            </p>
  
            <div class="info">
              <div class="information">
                <h4>Address</h4>
                <p>31 Deal Pl,Colombo 03</p>
              </div>
              <div class="email">
                <h4>Email</h4>
                <p>narathaisrilanka@gmail.com</p>
              </div>
              <div class="contact">
                <h4>Contact</h4>
                <p>0112 577 655</p>
              </div>
            </div>
  
            <div class="social-media">
              <p>Connect with us :</p>
              <div class="social-icons">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </div>
  
          <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>
  
            <form action="contact.php" method = "Post">
              <h3 class="title">Feedback Form</h3>
              <div class="input-container">
                <input type="text" name="name" class="input" />
                <label for="">Name</label>
                <span>Name</span>
              </div>
              <div class="input-container">
                <input type="email" name="email" class="input" />
                <label for="">Email</label>
                <span>Email</span>
              </div>
              <div class="input-container textarea">
                <textarea name="message" class="input"></textarea>
                <label for="">Message</label>
                <span>Message</span>
              </div>
              <input type="submit" value="Send" class="btn" />
            </form>
          </div>
        </div>
      </div>
  
      
















      <div class = "google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5601.499123671809!2d79.85281522322167!3d6.907576180920037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259679828d59d%3A0xbfa70ca3b927bbb2!2sNara%20Thai!5e0!3m2!1sen!2slk!4v1703862292937!5m2!1sen!2slk" 
        width="1520" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      
            <footer>
      <!--footer-->
      <div class="footer-details">

        <div class="logo-footer">
            <img src="img/narathailogo.jpg" alt="">
        </div>

        <div class="links-footer">
            <ul>
                <li id="titles">Quick Links</li>
                <li><a href="Gallery.html">Gallery</a></li>
                <li><a href="Reservation.html">Reservation</a></li>
                <li><a href="Contact.html">Contact</a></li>
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

          
        </div>
        </div>
      </section>
      <script src="app.js"></script>
   </body>
   </html>