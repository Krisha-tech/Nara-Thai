<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST ['telephone'];
    $table = $_POST ['preffered-table'];
    $reservation = $_POST ['reservation-kind'];
    $message = $_POST['message'];
    $date = $_POST['date'];

    $conn = new mysqli('127.0.0.1', 'root', '', 'nara thai');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO reservation (name, email_address, contact_no, reservation_kind, preffered_table, message,date) VALUES 
    ('$name', '$email','$telephone', '$reservation',' $table' ,'$message','$date')";
   


    if ($conn->query($sql) === TRUE) {
        echo "Reservation successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home page</title>
    
    <link rel="stylesheet" href="Home.css" />
    <script src="script.js" defer></script>
  </head>
  <body>
    <header>
      <div class="navigation">
        <!--navigation bar-->
        <div class="logo">
          <img src="Images/narathailogo.jpg" alt="" />
        </div>
        <ul class="links">
          <li><a id="active-link" href="">Home</a></li>
          <li><a href="About.html">About</a></li>
          <li><a href="./proj/menu.php">Menu</a></li>
          <li><a href="Gallery.html">Gallery</a></li>
          <li><a href="Reservation.html">Reservation</a></li>
          <li><a href="./feedback/Contact.php">Contact</a></li>
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

 <div class="slider-frame">
  <div class="slide-images">
    <div class="img-container">
      <img src="Images/d0.jpg" alt="d0.jpg">
      <div class="slide-text">
      <h1>Welcome To Nara Thai</h1>
      <h4>Delicious food served with love ❤️</h4>
    </div>
    </div>
    <div class="img-container">
      <img src="Images/08.jpg" alt="08.jpg" >
    </div>
    <div class="img-container">
      <img src="Images/71.jpg" alt="71.jpg">
      <div class="slide-text">
      <h1>Welcome To Nara Thai</h1>
      <h4>Delicious food served with love ❤️</h4>
    </div>
    </div>
    <div class="slide-text">
      <h1>Welcome To Nara Thai</h1>
      <h4>Delicious food served with love ❤️</h4>
    </div>
  </div>
</div>
    
    
    
  
    <section id="about">
      <!-- About Us Section Content -->
      <div class="about">
        <div class="about-text">
          <center> <h2>- About Us -</h2> </center>
          <p>Designed to be the Culinary epicenter, We try to uphold the traditions of the Local Household while bringing out the flavours of Sri Lanka with a bounty of fresh seasonal ingredients. <br><br>We take extra care to deliver fresh farm produce to a local classy table cuisine with an emphasis on seasonal & locally sourced ingredients and with the freshest Seafood. <br><br>May it be the ery hot curries or the soothing buffalo curd, We enjoy bringing the most sought after dishes with a little twist of our own. <br><br>Just as we take pride in supporting local farm communities in Sri Lanka, We take pride & joy in bringing you the homely ambiance along with your food.<br><br> Our interior is designed to bring you the olden day Walawwa Experience while you’re dining with us.<br><br> The Colonial space that we have opened for you has its modern & vintage touch, inviting you to a feel at home experience while you dine . Our mural wall has harmoniously incorporated the colonial architecture style to show you a cultural infusion. <br><br>We want you to sit down and enjoy your meal just like the way you enjoy your homemade dishes! We have embarked on this journey and e are glad that you have taken the time off of your schedule to know our story to experience our experience. <br><br>We couldn’t have done it without you</p>
          <a href="About.html">
            <button type="button">About Us</button>
        </a>
        </div>
        <div class="about-image">
          <img src="Images/homepage/hero.jpg" alt="About Us Image">
        </div>
      </div>
    </section>
  
    <section id="gallery">
      <!-- Gallery Section Content -->
      <div class="gallery">
        <h2>- Photo Gallery -</h2>
        <div class="gallery-images">
          <img src="Images/homepage/1.jpg" alt="Gallery Image 1">
          <img src="Images/homepage/2.jpg" alt="Gallery Image 2">
          <img src="Images/homepage/3.jpg" alt="Gallery Image 3">
          <img src="Images/homepage/4.jpg" alt="Gallery Image 4">
          <img src="Images/homepage/7.jpg" alt="Gallery Image 5">
          <img src="Images/homepage/9.jpg" alt="Gallery Image 6">
          <img src="Images/ss1.jpg" alt="Gallery Image 6">
          <img src="Images/Screen-Shot-2022-08-24-at-12.52.13.png" alt="Gallery Image 6">
        </div>
          
        <a href="Gallery.html">
          <button type="button">View More</button>
      </a>
      
    </section>
  
    <section class="section-5">
      <!--section-5-->
      <div class="menu-container-4">
        <h1>- Thai Chicken and Mutton Specials -</h1>
        <!-- <div class="menu-4">
          <img src="./images/Screenshot 2023-12-11 145420.png" alt="" />
        </div> -->
        <div id="meat" class="menu-1">
          <!-- <img
            src="./images/kisspng-casa-del-sole-pizza-fast-food-menu-0-pizza-menu-5b30c8752be3d2.4638584815299237011798.png"
            alt=""
          />
        </div> -->

        <div  class="box-image">
          <img style="width: 200px; height: 200px;" src="./images/m1.jpg" alt="">
          <h2>Chicken Thai Curry</h2>
          <h4>Rs 2450.00</h4>
        </div>
        <div class="box-image">
          <img style="width: 200px; height: 200px;" src="./images/m2.jpg" alt="">
          <h2>Beef Chips</h2>
          <h4>Rs 2950.00</h4>
        </div>
        <div class="box-image">
          <img style="width: 200px; height: 200px;" src="./images/m3.jpg" alt="">
          <h2>Pork Ribs</h2>
          <h4>Rs 4200.00</h4>
        </div>
        <div class="box-image">
          <img style="width: 200px; height: 200px;" src="./images/m5.jpg" alt="">
          <h2>Mutton And Tuna Special</h2>
          <h4>Rs 3050.00</h4>
        </div>
        <div class="box-image">
          <img style="width: 200px; height: 200px;" src="./images/m6.jpg" alt="">
          <h2>Thai Kottu</h2>
          <h4>Rs 1950.00</h4>
        </div>
        <div class="box-image">
          <img style="width: 200px; height: 200px;" src="./images/s6.jpg" alt="">
          <h2>chicken Cutlet</h2>
          <h4>Rs 3190.00</h4>
        </div>
        
        
      </div>
      </div>
     
    </section>
  
    <section id="testimonials">
      <!-- Testimonials Section Content -->
      <div class="testimonials">
        <h2>- What Our Customers Say - </h2>
        <div class="testimonial-container">
          <div class="testimonial">
            <p class="testimonial-review">"Amazing food and great atmosphere. Loved every bite!"</p>
            <p class="testimonial-name">- Dammika Samarathunga</p>
          </div>
          <div class="testimonial">
            <p class="testimonial-review">"The service was excellent, and the staff was very friendly. Will definitely come back!"</p>
            <p class="testimonial-name">- Damian De Silva</p>
          </div>
          <div class="testimonial">
            <p class="testimonial-review">"Delicious meals, reasonable prices. Highly recommended!"</p>
            <p class="testimonial-name">- Ashanya Samaratunga</p>
          </div>
        </div>
      </div>
    </section>
  
    <section id="book">
      <!-- Book a Table Section Content -->
      <div class="book">
        <h2>-Reserve A Table -</h2>
        <form action="Home.php" method="post" class="booking-form">
          <div class="form-row">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email Address:</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="telephone">Contact Number:</label>
              <input type="tel" id="telephone" name="telephone" required>
            </div>
            <div class="form-group">
              <label for="date">Reservation Date:</label>
              <input type="date" id="date" name="date" required>
            </div>
          </div>
          <div class="form-row2">
            <div class="form-group">
            <label for="reservation-kind">Reservation Kind:</label>
              <select id="reservation-kind" name="reservation-kind" required>
                <option value="Breakfast">Breakfast (8:00 AM-11:00 AM)</option>
                <option value="Lunch">Lunch (12:30 PM-3:00 PM)</option>
                <option value="High Tea">High Tea  (4:30 PM-6:00 PM)</option>
                <option value="Dinner">Dinner (7:00 PM-10:00 PM)</option>
               
            </select>
            </div>
           
            <div class="form-group">
              <label for="preffered-table">Preffered Table:</label>
              <select id="preffered-table" name="preffered-table" required>
                <option value="2 People">For 2 People</option>
                <option value="4 People">For 4 People</option>
                <option value="6 People">For 6 People</option>
                <option value="8 People">For 8 People</option>
               
            </select>
            </div>
          </div>
          <div class="form-row1">
            <div class="form-group">
              <label for="text">Message:</label>
              <textarea id="message" name="message" rows="4" required></textarea>
            </div>
          </div>
          <div class="form-row">
            <button type="submit">Book Now</button>
          </div>
        </form>
      </div>
</section>
            </div>
           
           
  
    <section id="contact">
      <!-- Contact Us Section Content -->
      <div class="contact">
        <h2>Contact Us</h2>
        <div class="contact-container">
          <!-- Container for Google Map -->
          <div class="google-map-container">
            <!-- Add your Google Map embed code or iframe here -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.86401119456!2d79.85050297461993!3d6.906860193092538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259679828d59d%3A0xbfa70ca3b927bbb2!2sNara%20Thai!5e0!3m2!1sen!2slk!4v1703855215048!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <!-- Container for Contact Form -->
          <div class="contact-form-container">
            <form action="#" method="post" class="contact-form">
              <div class="form-row">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number:</label>
                  <input type="tel" id="phone" name="phone" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="subject">Subject:</label>
                  <input type="text" id="subject" name="subject" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="message">Message:</label>
                  <textarea id="message" name="message" rows="4" required></textarea>
                </div>
              </div>
              <div class="form-row">
                <button type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <footer>
      <!--footer-->
      <div class="footer-details">

        <div class="logo-footer">
            <img src="Images/narathailogo.jpg" alt="">
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
    </body>
    </html>
    