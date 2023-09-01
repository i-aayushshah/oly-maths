<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>
    <link rel="stylesheet" href="login_1.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="new-password.php" method="POST" autocomplete="off">
                    <h2 class="text-center">New Password</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
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
                        <input class="form-control password" type="password" name="password" placeholder="Create new password" required>
                        <i class="uil uil-lock icon"></i>
  <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="form-group">
                        <input class="form-control password" type="password" name="cpassword" placeholder="Confirm your password" required>
                        <i class="uil uil-lock icon"></i>
  <i class="uil uil-eye-slash showHidePw1"></i>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="change-password" value="Change">
                    </div>
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

    
</body>
</html>