<?php

require_once "controllerUserData.php";

if (!isset($_SESSION['email'])) {
    header('Location: login-user.php');
    exit();
}

$email = $_SESSION['email'];
$errorDisplayTime = 5; // Display error message for 5 seconds

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $currentPassword = $_POST['current-password'];
    $newPassword = $_POST['new-password'];
    $confirmPassword = $_POST['confirm-password'];

    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $userData = mysqli_fetch_assoc($result);
        $hashedPassword = $userData['password'];

        if (password_verify($currentPassword, $hashedPassword)) {
            if ($newPassword === $confirmPassword) {
                // Hash the new password
                $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);

                // Update the user's password in the database
                $updateSql = "UPDATE usertable SET password = '$newPasswordHash' WHERE email = '$email'";
                $updateResult = mysqli_query($con, $updateSql);

                if ($updateResult) {
                    header("Location: profile.php?success=Password%20updated%20successfully.");
                    exit();
                } else {
                    // Failed to update password
                    $errorMessage = "Failed to update password: " . mysqli_error($con);
                    echo "<script>setTimeout(function(){alert('" . $errorMessage . "');}, " . ($errorDisplayTime * 1000) . ");</script>";
                }
            } else {
                // Passwords do not match
                $errorMessage = "New password and confirm password do not match.";
                echo "<script>setTimeout(function(){alert('" . $errorMessage . "');}, " . ($errorDisplayTime * 1000) . ");</script>";
            }
        } else {
            // Incorrect current password
            $errorMessage = "Current password is incorrect.";
            echo "<script>setTimeout(function(){alert('" . $errorMessage . "');}, " . ($errorDisplayTime * 1000) . ");</script>";
        }
    } else {
        // User not found
        $errorMessage = "User not found.";
        echo "<script>setTimeout(function(){alert('" . $errorMessage . "');}, " . ($errorDisplayTime * 1000) . ");</script>";
    }
}
?>
<!-- Your HTML form for changing the password goes here -->

<!-- Your "profile.php" page should handle success and error messages accordingly -->
