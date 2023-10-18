<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="login_1.css">
    <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

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
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                <div class="form-header">
                <p class="text-left">Login</p><span class="login-line"></span></p>
        </div>
        <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">

                        <input class="form-control form-control-with-icon" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="form-group">

  <input class="form-control form-control-with-icon password" type="password" name="password" placeholder="Password" required>
  <i class="uil uil-lock icon"></i>
  <i class="uil uil-eye-slash showHidePw"></i>
</div>

                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div><br>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const pwShowHide = document.querySelector(".showHidePw");
        const pwField = document.querySelector(".password");

        pwShowHide.addEventListener("click", () => {
            if (pwField.getAttribute("type") === "password") {
                pwField.setAttribute("type", "text");
                pwShowHide.classList.remove("uil-eye-slash");
                pwShowHide.classList.add("uil-eye");
            } else {
                pwField.setAttribute("type", "password");
                pwShowHide.classList.remove("uil-eye");
                pwShowHide.classList.add("uil-eye-slash");
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
            <a href="discussion.php">
              <span class="icon">
                <ion-icon name="chatbox-outline"></ion-icon>
              </span>
              <span class="text">Discussioin</span>
              <span class="circle"></span>
            </a>
          </li>
          <li class="list">
            <a href="/WebProject/about.php">
              <span class="icon">
                <ion-icon name="person-outline"></ion-icon>
              </span>
              <span class="text">Profile</span>
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
            // Get the current page URL
var currentPageUrl = window.location.href;

// Get all the navigation list items
var navigationItems = document.querySelectorAll('.navigation .list');

// Loop through each navigation item
navigationItems.forEach(function (item) {
  // Get the anchor tag within the list item
  var anchor = item.querySelector('a');

  // Get the href value of the anchor tag
  var href = anchor.getAttribute('href');

  // Check if the href matches the current page URL
  if (currentPageUrl.includes(href)) {
    // Add the "active" class to the list item
    item.classList.add('active');
  } else {
    // Remove the "active" class from other navigation items
    item.classList.remove('active');
  }
});


            </script>

          <script src="main.js"></script>

      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      <script src="script_1.js"></script>
      </main>

      <script src="script.js"></script>


</body>
</html>
