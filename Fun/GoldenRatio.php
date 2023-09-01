<?php require_once "../controllerUserData.php"; ?>
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
            header('Location: ../user-otp.php');
        }
    }
}else{
    header('Location: ../login-user.php');
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
    <link rel="stylesheet" href="/WebProject/header.css" />
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

body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    h1 {
      color: #333;
      text-align: center;
    }

    .container {
      max-width: 450px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type="number"] {
      width: 100px;
      padding: 8px;
      font-size: 16px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    button {
      margin-top: 10px;
      padding: 8px 16px;
      font-size: 16px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .btn-clear {
      background-color: #ff6f6f;
    }

    .result {
      margin-top: 20px;
      font-weight: bold;
    }

    .golden-ratio-info {
      margin-top: 20px;
      padding: 10px;
      background-color: #f4f4f4;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
 
    </style>
    
  </head>
  <body>
    <nav class="sidebar">
      
      <a href="#" class="logo"><img src="../images/logo.png" alt="">Oly Maths</a>
      

     
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
                <a href="/WebProject/BasicArithmetic/multiply.php">Multiplication</a>
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
                <a href="/WebProject/Fun/Kaprekar_sConstant.php">Kaprekar's Constant </a>
              </li>

              <li class="item">
                <a href="/WebProject/Fun/FibonacciSequence.php">Fibonacci Sequence </a>
              </li>

              <li class="item">
                <a href="/WebProject/Fun/Pascal_sTriangle.php">Pascal's Triangle  </a>
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
      <h6>Welcome <?php echo $fetch_info['name'] ?></h6>
        <a href="#" class="logo"><img src="../images/logo.png" alt="">Oly Maths</a>
        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
        <a href="#"></a><ion-icon name="logo-facebook"></ion-icon></a>
        <a href="#"></a><ion-icon name="logo-twitter"></ion-icon></a>
        <a href="#"></a><ion-icon name="logo-linkedin"></ion-icon></a>
        <button type="button" class="btn btn-light"><a href="../logout-user.php">Logout</a></button>
      </div>
      
    </nav>

    <main class="main">
    <section>
    <div class="container">
    <h1>Golden Ratio Calculator</h1>
    <h4>This interface is provided to calculate if two input numbers are in golden ratio or not. Example: 3.2360679775 and 2 are in golden ratio.</h4>
    <div>
      <label for="number1">Number 1:</label>
      <input type="number" id="number1">
    </div>
    <div>
      <label for="number2">Number 2:</label>
      <input type="number" id="number2">
    </div>
    <div>
      <button onclick="checkGoldenRatio()">Check</button>
      <button onclick="clearInput()" class="btn-clear">Clear</button>
    </div>
    <div class="result" id="result"></div>
    <div class="golden-ratio-info" id="golden-ratio-info"></div>
  </div>

  <script>
    function checkGoldenRatio() {
      var number1Input = document.getElementById("number1");
      var number2Input = document.getElementById("number2");
      var resultOutput = document.getElementById("result");
      var infoOutput = document.getElementById("golden-ratio-info");

      resultOutput.textContent = ""; // Clear previous result
      infoOutput.textContent = ""; // Clear previous info

      var number1 = parseFloat(number1Input.value);
      var number2 = parseFloat(number2Input.value);

      if (isNaN(number1) || isNaN(number2) || number1 <= 0 || number2 <= 0) {
        resultOutput.textContent = "Please enter valid numbers greater than zero.";
        return;
      }

      var ratio = number1 / number2;
      var isGoldenRatio = isApproximatelyEqual(ratio, 1.618);

      resultOutput.textContent = "The numbers " + number1 + " and " + number2 + " are " + (isGoldenRatio ? "in" : "not in") + " the golden ratio.";

      if (isGoldenRatio) {
        var infoText = "The golden ratio, also known as the divine proportion, is a mathematical ratio that is approximately equal to 1.6180339887. It has been regarded as aesthetically pleasing and has been used in art, architecture, and nature. Some examples include the Parthenon in Athens, the spirals in a seashell, and the proportions of the human body.";
        infoOutput.textContent = infoText;
      }
    }

    function isApproximatelyEqual(a, b, epsilon = 0.0001) {
      return Math.abs(a - b) < epsilon;
    }

    function clearInput() {
      var number1Input = document.getElementById("number1");
      var number2Input = document.getElementById("number2");
      var resultOutput = document.getElementById("result");
      var infoOutput = document.getElementById("golden-ratio-info");

      number1Input.value = "";
      number2Input.value = "";
      resultOutput.textContent = "";
      infoOutput.textContent = "";
    }
  </script>   

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
            <a href="/WebProject/about.php">
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
