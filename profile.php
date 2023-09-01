<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<?php
// Check if success message exists in the URL parameter
if (isset($_GET['success'])) {
    $successMessage = $_GET['success'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oly Maths</title>
    <link rel="stylesheet" href="contact.css" >
    <link rel="stylesheet" href="profile.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
  
   .navbar .btn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 7px 14px; /* Adjust the padding as per your preference */
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px /* Adjust the font size as per your preference */
  cursor: pointer;
  border-radius: 5px;
  margin-left: 50px; /* Add space to the left of the button */

}

.btn:hover {
  background-color: #45a049;
}


 
    </style>
    
  </head>
  <body>

  <nav class="navbar">
        <i class="" id="sidebar-close"></i>
        <div class="navbar-items">
      <h6>Welcome <?php echo $fetch_info['name'] ?></h6>
        <a href="#" class="logo"><img src="images/logo.png" alt="">Oly Maths</a>
        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
        <a href="#"></a><ion-icon name="logo-facebook"></ion-icon></a>
        <a href="#"></a><ion-icon name="logo-twitter"></ion-icon></a>
        <a href="#"></a><ion-icon name="logo-linkedin"></ion-icon></a>
        <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
      </div>
</nav>
<main class="main">
    <section>
    <div class="profile-container">
        <div class="profile">
        <div class="profile-picture">
  <?php
  if ($fetch_info['profile'] != null) {
    echo '<img src="' . $fetch_info['profile'] . '" alt="Profile Picture">';
  } else {
    echo '<img src="60111.jpg" alt="Dummy Picture">';
  }
  ?>
</div>

            <h2>User's Profile</h2>
            <p>First Name: <?php echo $fetch_info['fname'] ?></p>
            <p>Last Name: <?php echo $fetch_info['lname'] ?></p>
            <p>Date of Birth: <?php echo $fetch_info['dob'] ?></p>
            <p>Email: <?php echo $fetch_info['email'] ?></p>
            <p>Username: <?php echo $fetch_info['name'] ?></p>
            <!-- Add more profile details as needed -->
        </div>
        <div class="actions">
            <a href="edit.php">
                <button class="edit-profile-btn">Edit Profile</button>
            </a>
            <a href="change_paswword.php">
                <button class="change-password-btn">Change Password</button>
            </a>
        </div>
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
            <a href="profile.php">
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
        $(document).ready(function() {
            // Display the success message
            var successMessage = "<?php echo isset($successMessage) ? $successMessage : ''; ?>";
            if (successMessage !== "") {
                showMessage(successMessage);
            }
        });

        function showMessage(message) {
            var messageElement = $("<div>")
                .text(message)
                .css({
                    "background-color": "#e0ffe0",
                    "padding": "10px",
                    "text-align": "center",
                    "position": "fixed",
                    "top": "15%",
                    "left": "50%",
                    "transform": "translate(-50%, -50%)",
                    "z-index": "9999"
                });

            $("body").append(messageElement);

            // Hide the message after 2 seconds
            setTimeout(function() {
                messageElement.fadeOut(500, function() {
                    $(this).remove();
                });
            }, 2000);
        }
    </script>
      
      <script src="main.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script_1.js"></script>
    </main>

    <script src="script.js"></script>
  </body>
</html>