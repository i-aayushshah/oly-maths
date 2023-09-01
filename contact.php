<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oly Maths</title>
    <link rel="stylesheet" href="contact.css" >
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
   
  </head>
  <body>
    <nav class="navbar">
        <i class="" id="sidebar-close"></i>
        <div class="navbar-items">
          <a href="#" class="logo"><img src="images/logo.png" alt="">Oly Maths</a>
          <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="#"></a><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="#"></a><ion-icon name="logo-twitter"></ion-icon></a>
          <a href="#"></a><ion-icon name="logo-linkedin"></ion-icon></a>
        </div>
        
      </nav>
  
      <main class="main">
        <section class="contact">
            <div class="container contact__container">
                <aside class="contact__aside">
                    <div class="aside__image">
                        <img src="/WebProject/images/Contact.svg" alt="contact" height="100%" width=100%>
                    </div>
                    <h2>Contact Us</h2>
                    <p>
                        With a results-oriented approach, Rocket Digital is ready to blast off your digital presence to new heights. Contact us today to launch your digital marketing journey!
                    </p>
                <ul class="contact__details">
                    <li>
                        <i class="uil uil-phone-times"></i>
                        <h5>+977 9867908762</h5>
                    </li>
        
                    <li>
                        <i class="uil uil-envelope"></i>
                        <h5>demo123@yahoo.com</h5>
                    </li>
        
                    <li>
                        <i class="uil uil-location-point"></i>
                        <h5>Bhadrapur, Jhapa</h5>
                    </li>
                </ul>   
                <ul class="contact__socials">
                    <li><a href="https://facebook.com" target="_blank"> </a></li>
        
                    <li><a href="https://instagram.com" target="_blank"><i class="uil uil-instagram-alt"></i> </a></li>
        
                    <li><a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i> </a></li>
                </ul> 
                </aside>
        
                <form 
                action="https://formspree.io/f/xwkjanpy"
                method="POST"
              id="contactForm" >
                    <div class="form__name">
                        <input type="text" name="First Name" id="firstName" placeholder="First Name" required>
                        <input type="text" name="Last Name" id="lastName" placeholder="Last Name" required> 
                        <div id="nameError" class="error"></div>
                    </div>
                    <input type="email" name="Email Address" id="email" placeholder="Email Address" required>
                    <div id="emailError" class="error"></div> 
                    <textarea name="Message"placeholder="Message" rows="7" id="message" required></textarea>
                    <div id="messageError" class="error"></div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </section>
        <div class="navigation">
            <ul>
              <li class="list">
                <a href="/WebProject/home.php">
                  <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                  </span> 
                  <span class="text">Home</span>
                  <span class="circle"></span>
                </a>
              </li>
              <li class="list">
                <a href="/WebProject/profile.php">
                  <span class="icon">
                    <ion-icon name="person-outline"></ion-icon>
                  </span>
                  <span class="text">Profile</span>
                  <span class="circle"></span>
                </a>
              </li>
              <li class="list">
                <a href="#">
                  <span class="icon">
                    <ion-icon name="people"></ion-icon>
                  </span>
                  <span class="text">About Us</span>
                  <span class="circle"></span>
                </a>
              </li>
              <li class="list">
                <a href="/WebProject/login-user.php">
                  <span class="icon">
                    <ion-icon name="person-add"></ion-icon>
                  </span>
                  <span class="text">Sign in</span>
                  <span class="circle"></span>
                </a>
              </li>
              <li class="list">
                <a href="/WebProject/contact.php">
                  <span class="icon">
                    <ion-icon name="call"></ion-icon>
                  </span>
                  <span class="text">Contact Us</span>
                  <span class="circle"></span>
                </a>
              </li>
              <div class="indicator"></div>
            </ul>
          </div>
          
          <script>
            // Get the navigation list items
var navigationItems = document.querySelectorAll('.navigation .list');

// Loop through each navigation item
navigationItems.forEach(function (item) {
  // Remove the "active" class from all navigation items
  item.classList.remove('active');
});

// Find the "Sign in" menu item and add the "active" class
var signInMenuItem = document.querySelector('.navigation .list:nth-child(5)');
signInMenuItem.classList.add('active');

            </script>
          
          <script src="main.js"></script>

      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      <script src="script_1.js"></script>
      </main>
  
      <script src="script.js"></script>
    </body>
  </html>
  