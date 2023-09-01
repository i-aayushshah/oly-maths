<?php
require "connection.php";
require_once "controllerUserData.php";

if (isset($_POST['SaveChanges'])) {
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $imageUploaded = isset($_FILES["new-profile-picture"]) && $_FILES["new-profile-picture"]["error"] !== UPLOAD_ERR_NO_FILE;

    // Process the image if uploaded
    if ($imageUploaded) {
        $image = $_FILES["new-profile-picture"];
        $imageName = $image["name"];
        $imageTmpPath = $image["tmp_name"];
        $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);
        $allowedExtensions = array("jpg", "jpeg", "png"); // Add more extensions if needed

        // Validate the image extension
        if (!in_array(strtolower($imageExtension), $allowedExtensions)) {
            echo "Invalid image format. Only JPG, JPEG, and PNG files are allowed.";
            exit();
        }

        // Move the uploaded image to a desired location
        $destinationPath = "profile/"; // Set your desired destination path
        $imageFileName = uniqid() . "." . $imageExtension;
        $imageDestination = $destinationPath . $imageFileName;

        if (!move_uploaded_file($imageTmpPath, $imageDestination)) {
            echo "Failed to upload the image.";
            exit();
        }
    } else {
        // No image uploaded
        $imageDestination = "profile/60111.jpg";
    }
    
    if (isset($_SESSION["email"]) && filter_var($_SESSION["email"], FILTER_VALIDATE_EMAIL)) {
        $email = $_SESSION["email"];

        // Update the profile picture in the user table
        $updateProfileQuery = "UPDATE usertable SET fname = '$firstName', lname = '$lastName', profile = '$imageDestination' WHERE email = '$email'";
        $runUpdateProfileQuery = mysqli_query($con, $updateProfileQuery);

        if ($runUpdateProfileQuery) {
            // Profile updated successfully

            // Prepare and execute the update query for the question table
            $stmt = $con->prepare("UPDATE questions SET profile = ?, fname = ?, lname= ?  WHERE username = ?");
            $stmt->bind_param("ssss", $imageDestination, $firstName, $lastName, $_SESSION["name"]);
            $stmt->execute();

            $stmte = $con->prepare("UPDATE answers SET profile = ?, fname = ?, lname= ?  WHERE username = ?");
            $stmte->bind_param("ssss", $imageDestination, $firstName, $lastName, $_SESSION["name"]);
            $stmte->execute();

            // Check if the update was successful
            if ($stmt->affected_rows > 0) {
                echo "Profile picture updated in question table for username: " . $_SESSION["name"];
            } else {
                echo "No matching username found in the question table.";
            }

            // Close the statement
            $stmt->close();

            // Update session variables
            $_SESSION["fname"] = $firstName;
            $_SESSION["lname"] = $lastName;
            $_SESSION["profile"] = $imageDestination;

            // Redirect to success page
            header("Location: profile.php?success=Profile updated successfully.");
            exit();
        } else {
            // Failed to update profile
            $errorMessage = "Failed to update profile: " . mysqli_error($con);
            header("Location: profile-error.php?error=" . urlencode($errorMessage));
            exit();
        }
    } else {
        // Invalid or missing email in session
        $errorMessage = "Invalid or missing email.";
        header("Location: profile-error.php?error=" . urlencode($errorMessage));
        exit();
    }
}

// Close the database connection
$con->close();
?>
