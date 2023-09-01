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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oly Maths</title>
    <link rel="stylesheet" href="/WebProject/style.css" />
    <link rel="stylesheet" href="/WebProject/qa.css" />
    <link rel="stylesheet" href="/WebProject/header_1.css" />
    <link rel="stylesheet" href="/WebProject/feed_1.css" />
    <script src="/WebProject/header.js"></script>
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
    <nav class="sidebar">
      
      <a href="#" class="logo"><img src="images/logo.png" alt="">Oly Maths</a>
      

     
      <div class="menu-content">
        <ul class="menu-items">
          <div class="menu-title">Contents</div>
          <li class="item">
            <div class="submenu-item">
              <span>Basic Arithmetic</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Sub Contents
              </div>
              <li class="item">
                <a href="/WebProject/BasicArithmetic/multiply.php">Multiply</a>
              </li>
              <li class="item">
                <a href="/WebProject/BasicArithmetic/division.php">Division</a>
              </li>
              <li class="item">
                <a href="/WebProject/BasicArithmetic/Exponential.php">Exponential</a>
              </li>
              <li class="item">
                <a href="/WebProject/BasicArithmetic/Modulo.php">Modulo</a>
              </li>
              <li class="item">
                <a href="/WebProject/BasicArithmetic/Logarithm.php">Logarithm</a>
              </li>
              <li class="item">
                <a href="/WebProject/BasicArithmetic/Arithmetic_Progression.php">Arithmetic Progression</a>
              </li>
              <li class="item">
                <a href="/WebProject/BasicArithmetic/Geometric_Progression.php">Geometric Progression</a>
              </li>
            </ul>
          </li>
          <li class="item">
            <div class="submenu-item">
              <span>Prime Numbers</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Sub Contents
              </div>
              <li class="item">
                <a href="/WebProject/PrimeNumbers/nth_prime.php">nth prime</a>
              </li>
              <li class="item">
                <a href="/WebProject/PrimeNumbers/Primality.php">Primality</a>
              </li>
              <li class="item">
                <a href="/WebProject/PrimeNumbers/PrimeCount.php">Prime Count [π(n)]</a>
              </li>
              <li class="item">
                <a href="/WebProject/PrimeNumbers/PrimeFactors.php">Prime Factors</a>
              </li>
              <li class="item">
                <a href="/WebProject/PrimeNumbers/Primorial.php">Primorial</a>
              </li>
              <li class="item">
                <a href="/WebProject/PrimeNumbers/TwinPrimes.php">Twin Primes</a>
              </li>
              <li class="item">
                <a href="/WebProject/PrimeNumbers/PrimeList.php">Prime List</a>
              </li>
            </ul>
          </li>


          <li class="item">
            <div class="submenu-item">
              <span>Number Theory </span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Sub Contents
              </div>
              <li class="item">
                <a href="/WebProject/NumberTheory/GreatestCommon.php">Greatest Common Divisor (GCD)</a>
              </li>
              <li class="item">
                <a href="/WebProject/NumberTheory/lcm.php">Lowest Common Multiple (LCM)</a>
              </li>
              <li class="item">
                <a href="/WebProject/NumberTheory/ExtendedEuler.php">Extended Euler Algorithm </a>
              </li>
              <li class="item">
                <a href="/WebProject/NumberTheory/EulerCriterion.php">Euler's Criterion </a>
              </li>
              <li class="item">
                <a href="/WebProject/NumberTheory/LinearDiophantineEquation.php">Linear Diophantine Equation</a>
              </li>
              <li class="item">
                <a href="/WebProject/NumberTheory/MersennePrime.php">Mersenne Prime</a>
              </li>
              <li class="item">
                <a href="/WebProject/NumberTheory/WilsonTheorem.php">Wilson Theorem </a>
              </li>
              <li class="item">
                <a href="/WebProject/NumberTheory/PrimitiveRoots.php">Primitive Roots</a>
              </li>
            </ul>
          </li>

          <li class="item">
            <div class="submenu-item">
              <span>Polynomials  </span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Sub Contents
              </div>
              <li class="item">
                <a href="/WebProject/Polynomials/PolynomialMultiplication.php">Polynomial Multiplication</a>
              </li>
              </ul>
          </li>

            
          <li class="item">
            <div class="submenu-item">
              <span> Arithmetic Functions </span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Sub Contents
              </div>
              <li class="item">
                <a href="/WebProject/ArithmeticFunctions/EulerTotientFunction.php">Euler Totient Function (Φ(n))</a>
              </li>
              <li class="item">
                <a href="/WebProject/ArithmeticFunctions/SumofDivisorsFunction.php">Sum of Divisors Function (σ(n))</a>
              </li>
              <li class="item">
                <a href="/WebProject/ArithmeticFunctions/PrimeOmegaFunctions.php">Prime Omega Functions (ω(n) & Ω(n)) </a>
              </li>
              <li class="item">
                <a href="/WebProject/ArithmeticFunctions/MobiusFunction.php">Mobius Function (μ(n))</a>
              </li>
              <li class="item">
                <a href="/WebProject/ArithmeticFunctions/MertensFunction.php">Mertens Function (M(n))</a>
              </li>
              <li class="item">
                <a href="/WebProject/ArithmeticFunctions/p-adicValuation.php">p-adic Valuation (Γp)</a>
              </li>
              <li class="item">
                <a href="/WebProject/ArithmeticFunctions/CarmichaelLambdaFunction.php">Carmichael Lambda Function (λ(n)) </a>
              </li>
              <li class="item">
                <a href="/WebProject/ArithmeticFunctions/ChebyshevFunction.php">Chebyshev Function (Ψ(s))</a>
              </li>
            </ul>
          </li>


          <li class="item">
            <div class="submenu-item">
              <span>Binary Quadratic Functions   </span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Sub Contents
              </div>
              <li class="item">
                <a href="/WebProject/BinaryQuadratic/CommonProperties.php">Common Properties</a>
              </li>
              </ul>
          </li>
          
              <li class="item">
            <div class="submenu-item">
              <span>Fun  </span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Sub Contents
              </div>
              <li class="item">
                <a href="/WebProject/Fun/Kaprekar'sConstant.php">Kaprekar's Constant </a>
              </li>

              <li class="item">
                <a href="/WebProject/Fun/FibonacciSequence.php">Fibonacci Sequence </a>
              </li>

              <li class="item">
                <a href="/WebProject/Fun/Pascal'sTriangle.php">Pascal's Triangle  </a>
              </li>

              <li class="item">
                <a href="/WebProject/Fun/GoldenRatio.php">Golden Ratio </a>
              </li>
              </ul>
          </li>



        </ul>
      </div>
    </nav>

    <nav class="navbar">
      <i class="fa-solid fa-bars" id="sidebar-close"></i>
      <div class="navbar-items">
      <h6>Welcome <?php echo $fetch_info['fname'] ?></h6>
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
    <div class="container">
    <div class="quoraBox">
    <div class="quoraBox__info">
    <?php
  if ($fetch_info['profile'] != null) {
    echo '<img src="' . $fetch_info['profile'] . '" alt="Profile Picture" class="userAvatar">';
  } else {
    echo '<img src="60111.jpg" alt="Dummy Picture" class="userAvatar">';
  }
  ?>      <h4><?php echo $fetch_info['fname'] ?> <?php echo $fetch_info['lname'] ?></h4>
    </div>
    <div class="quoraBox__quora" onclick="openDialog()">
      <p>What is your question or link?</p>
    </div>
  </div>
</div>  
  <div id="dialog" class="dialog">
    <div class="dialog__content">
      <span class="close" onclick="closeDialog()">&times;</span>
      <h3>Post your question</h3>
      <div class="userProfile">
        
      <?php
  if ($fetch_info['profile'] != null) {
    echo '<img src="' . $fetch_info['profile'] . '" alt="Profile Picture" class="userAvatar">';
  } else {
    echo '<img src="60111.jpg" alt="Dummy Picture" class="userAvatar">';
  }
  ?>
        <h5><?php echo $fetch_info['fname'] ?> <?php echo $fetch_info['lname'] ?></h5>
       
      </div>
      <form action="submit_question.php" method="POST" enctype="multipart/form-data">
        <textarea name="question" placeholder="Enter your question or link" required></textarea>
        <label for="fileInput" class="fileInputContainer">
          <span>Choose files</span>
          <input type="file" name="image" id="fileInput" accept="image/*" style="display: none;" onchange="addFiles(event)" />
        </label>
        <div id="imagePreview" class="imagePreview"></div>

        <button type="submit" name="post">Post</button>
      </form>
    </div>
  </div>

</section>
    

<section>

<div class="feed">
    <?php
    // Connect to your database
    $conn = mysqli_connect('localhost', 'root', '', 'userform');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the statement
    $stmt = mysqli_prepare($conn, "SELECT * FROM questions");

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);
    $index = 0;

    // Loop through the posts and display them
    while ($row = mysqli_fetch_assoc($result)) {
        $FirstName = $row['fname'];
        $lastName = $row['lname'];
        $postDate = $row['timestamp'];
        $postContent = $row['question'];
        $postImage = $row['image'];
        $profile = $row['profile'];
        $qid = $row["id"];
        ?>

        <div class="post">
            <div class="post-header">
                <img src="<?php echo $profile; ?>" alt="User Profile Photo" class="user-profile-photo">
                <div class="post-info">
                    <p class="user-name"><?php echo $FirstName; ?> <?php echo $lastName; ?> <span class="user-action">posted a question</span></p>
                    <p class="post-date"><?php echo $postDate; ?></p>
                </div>
            </div>
            <p class="post-content"><?php echo $postContent; ?></p>

            <?php if (!empty($postImage)) { ?>
                <img src="<?php echo $postImage; ?>" alt="Post Image" class="post-image">
            <?php } ?>

            <div class="button-bar">
                <button class="clap-btn">
                    <i class="fas fa-hand-holding-heart"></i>
                    <span>Thanks</span>
                </button>
                <button class="answer-thread-btn">
                    <i class="fa-sharp fa-regular fa-pen-to-square"></i>
                    <span>Answer Thread</span>
                </button>
            </div>

            <div class="answer-section" style="display: none;">
    <div class="user-profile-container">
        <?php
        if ($fetch_info['profile'] != null) {
            echo '<img src="' . $fetch_info['profile'] . '" alt="Profile Picture" class="user-profile-photo">';
        } else {
            echo '<img src="60111.jpg" alt="Dummy Picture" class="user-profile-photo">';
        }
        ?>
        <div class="answer-input-container">
            <form action="submit_answer.php" method="POST" enctype="multipart/form-data">
                <textarea placeholder="Add an answer" class="answer-input" name="answer"></textarea>
                <div class="preview-container" style="display: none;">
                    <img class="preview-image" alt="Image Preview" id="preview-image-<?php echo $qid; ?>">
                    <button class="cross-button" style="display: none;">&times;</button>
                </div>
                <label for="file-upload-<?php echo $qid; ?>" class="file-upload-label">
                    <img src="123.jpg" alt="Gallery Icon" class="gallery-icon">
                </label>
                <input id="file-upload-<?php echo $qid; ?>" type="file" accept="image/*" class="file-upload-input" name="image" onchange="previewImage(event, <?php echo $qid; ?>)">
                <input type="hidden" name="question_id" value="<?php echo $qid; ?>">
                <!-- Hidden input to store the question ID -->
                <button type="submit" class="answer-btn" name="answers">Answer</button>
            </form>
        </div>
    </div>
  
   
  
    <ul class="answers-list">
                    <?php
                    
                    $answerStmt = mysqli_prepare($conn, "SELECT * FROM answers WHERE aid = ?");

                    mysqli_stmt_bind_param($answerStmt, "i", $qid);

                    // Execute the statement
                    mysqli_stmt_execute($answerStmt);

                    // Get the result
                    $answerResult = mysqli_stmt_get_result($answerStmt);

                    // Loop through the answers and display them
                    while ($answerRow = mysqli_fetch_assoc($answerResult)) {
                        $answerAuthor = $answerRow['fname'];
                        $answerAuthorl = $answerRow['lname'];
                        $answerDate = $answerRow['timestamp'];
                        $answerContent = $answerRow['answer'];
                        $answerImage = $answerRow['image'];
                        ?>

                        <div class="answer-item" id="answeritem">
                            <div class="user-header">
                                <img src="<?php echo $profile; ?>" alt="User Profile Photo" class="user-profile-photo" />
                                <p class="user-name"><?php echo $answerAuthor; ?><?php echo $answerAuthorl; ?></p>
                                <span> </span>
                                <p class="answered-date"><?php echo $answerDate; ?></p>
                            </div>
                            <div class="answer-content">
                                <p class="answer-text"><?php echo $answerContent; ?></p>
                                <?php if (!empty($answerImage)) { ?>
                                    <img src="<?php echo $answerImage; ?>" alt="Answer Image" class="answer-image" />
                                <?php } ?>
                            </div>
                            <div class="happy-container">
                                <button class="clap-btn">
                                    <i class="fa-sharp fa-regular fa-face-smile"></i> Happy
                                </button>
                                <span class="happy-count">0</span>
                            </div>
                        </div>

                        <?php
                    }

                    // Close the answer statement
                    mysqli_stmt_close($answerStmt);
                    ?>
                </ul>
            </div>
        </div>

        <?php
        $index++; // Increment the index variable
    }

    // Close the statement
    mysqli_stmt_close($stmt);

    // Close the database connection
    mysqli_close($conn);
    ?>
</div>
<script>
    function previewImage(event, qid) {
    var input = event.target;
    var previewContainer = input.parentNode.querySelector('.preview-container');
    var previewImage = previewContainer.querySelector('#preview-image-' + qid);
    var crossButton = previewContainer.querySelector('.cross-button');

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            previewImage.src = e.target.result;
            previewContainer.style.display = 'block';
            crossButton.style.display = 'block';
        };

        reader.readAsDataURL(input.files[0]);
    } else {
        previewImage.src = '';
        previewContainer.style.display = 'none';
        crossButton.style.display = 'none';
    }

    crossButton.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent form submission

        // Code to remove the preview image or perform any other desired action
        previewImage.src = '';
        previewContainer.style.display = 'none';
        crossButton.style.display = 'none';
    });
}

</script>

<script>
   // JavaScript code to handle file upload and image preview

// Get all file input elements
const fileInputs = document.querySelectorAll('.file-upload-input');

// Loop through each file input element
fileInputs.forEach(function(fileInput) {
    const previewContainer = fileInput.parentNode.nextElementSibling;
    const previewImage = previewContainer.querySelector('.preview-image');
    const crossButton = previewContainer.querySelector('.cross-button');

    // Handle file input change event
    fileInput.addEventListener('change', function(event) {
        const file = event.target.files[0];

        // Display the image preview
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();

            reader.onload = function() {
                previewImage.src = reader.result;
            };

            reader.readAsDataURL(file);
            previewContainer.style.display = 'block';
            crossButton.style.display = 'block';
        }
    });

    // Handle cross button click event to remove the preview
    crossButton.addEventListener('click', function() {
        previewImage.src = '';
        fileInput.value = '';
        previewContainer.style.display = 'none';
        crossButton.style.display = 'none';
    });
});

</script>


<script>
    // JavaScript code to handle the toggle behavior
    const answerSections = document.querySelectorAll('.answer-section');

    answerSections.forEach((answerSection) => {
        const answerThreadBtn = answerSection.previousElementSibling.querySelector('.answer-thread-btn');

        answerThreadBtn.addEventListener('click', () => {
            answerSection.style.display = (answerSection.style.display === 'none') ? 'block' : 'none';
        });
    });
</script>
<script src="post.js"></script>


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
            // Get the navigation list items
var navigationItems = document.querySelectorAll('.navigation .list');

// Loop through each navigation item
navigationItems.forEach(function (item) {
  // Remove the "active" class from all navigation items
  item.classList.remove('active');
});

// Find the "Sign in" menu item and add the "active" class
var signInMenuItem = document.querySelector('.navigation .list:nth-child(1)');
signInMenuItem.classList.add('active');

            </script>
      
      <script src="main.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="/WebProject/script_1.js"></script>
    </main>

    <script src="/WebProject/script.js"></script>
  </body>
</html>
