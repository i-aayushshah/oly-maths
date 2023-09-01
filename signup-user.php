<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
   

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $("#birthDate").datepicker({
                dateFormat: "dd/mm/yy",
                changeMonth: true,
                changeYear: true,
                yearRange: "1900:2023" // Adjust the range as needed
            });
        });
    </script>

   
    <link rel="stylesheet" href="signup_1.css">
    <link rel="stylesheet" href="signup.css">
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

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST">
                <div class="form-header">
          <p class="text-left">Registration</p><span class="login-line"></span></p>
        </div>
        <p class="text-center">It's quick and Esay.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                    
                        <input class="form-control" type="text" name="fname" placeholder="First Name" required>
                        <i class="uil uil-user"></i>
                    </div>

                    <div class="form-group">
                    
                        <input class="form-control" type="text" name="lname" placeholder="Last Name" required >
                        <i class="uil uil-user"></i>
                    </div>

                    <div class="form-group">
                    
                        <input class="form-control" type="text" name="name" placeholder="User Name" required value="<?php echo $name ?>">
                        <i class="uil uil-user"></i>
                    </div>

                    <div class="form-group">
                    
                    
                    <input class="form-control" type="text" id="birthDate" name="dob" placeholder="Enter your birth date" for="birthDate" required >
    
    <i class="uil uil-calendar-alt"></i>
    
                    </div>
                    
                    <div class="form-group">
                    
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="form-group">
                        <input class="form-control password" type="password" name="password" placeholder="Password" required>

                        <i class="uil uil-lock icon"></i>
  <i class="uil uil-eye-slash showHidePw"></i>
                        
                        
                    </div>
                    <div class="form-group">
                        <input class="form-control password" type="password" name="cpassword" placeholder="Confirm password" required>

                        <i class="uil uil-lock icon"></i>
  <i class="uil uil-eye-slash showHidePw1"></i>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>

    <script>
    const pwShowHide1 = document.querySelector(".showHidePw");
    const pwField1 = document.querySelector(".password");
    
    const pwShowHide2 = document.querySelector(".showHidePw1");
    const pwField2 = document.querySelector('input[name="cpassword"]');

    pwShowHide1.addEventListener("click", () => {
        if (pwField1.getAttribute("type") === "password") {
            pwField1.setAttribute("type", "text");
            pwShowHide1.classList.remove("uil-eye-slash");
            pwShowHide1.classList.add("uil-eye");
        } else {
            pwField1.setAttribute("type", "password");
            pwShowHide1.classList.remove("uil-eye");
            pwShowHide1.classList.add("uil-eye-slash");
        }
    });
    
    pwShowHide2.addEventListener("click", () => {
        if (pwField2.getAttribute("type") === "password") {
            pwField2.setAttribute("type", "text");
            pwShowHide2.classList.remove("uil-eye-slash");
            pwShowHide2.classList.add("uil-eye");
        } else {
            pwField2.setAttribute("type", "password");
            pwShowHide2.classList.remove("uil-eye");
            pwShowHide2.classList.add("uil-eye-slash");
        }
    });
</script>

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
                <a href="#">
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
            // Get the current page URL
            var currentPageUrl = window.location.href;
          
            // Get all the navigation list items
            var navigationItems = document.querySelectorAll('.navigation .list');
          
            // Loop through each navigation item
            navigationItems.forEach(function(item) {
              // Get the anchor tag within the list item
              var anchor = item.querySelector('a');
          
              // Get the href value of the anchor tag
              var href = anchor.getAttribute('href');
          
              // Check if the href matches the current page URL
              if (currentPageUrl.includes(href)) {
                // Add the "active" class to the list item
                item.classList.add('active');
              }
            });
          </script>
          <script>
            // Get the navigation list items
var navigationItems = document.querySelectorAll('.navigation .list');

// Loop through each navigation item
navigationItems.forEach(function (item) {
  // Remove the "active" class from all navigation items
  item.classList.remove('active');
});

// Find the "Sign in" menu item and add the "active" class
var signInMenuItem = document.querySelector('.navigation .list:nth-child(4)');
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