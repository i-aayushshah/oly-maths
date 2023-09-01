<?php

require "controllerUserData.php";
require "connection.php";


// Check if the user is logged in

// Establish database connection
// ...

if(isset($_POST['answers'])){
    // Check if the required fields are present
    if (!isset($_POST["answer"])) {
        echo "Missing question.";
        exit();
    }

    // Retrieve the user's name from the session
    $username = $_SESSION["name"];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION["lname"];

    // Retrieve the question from the form submission
    $answer = $_POST["answer"];
    $aid = $_POST["question_id"];
    
 

    // Check if a profile photo was uploaded
    $profilePhotoUploaded = isset($_SESSION["profile"]) && $_SESSION["profile"] !== null && $_SESSION["profile"] !== "";

    // Process the profile photo if uploaded or add a dummy photo
    if ($profilePhotoUploaded) {
        $profile = $_SESSION["profile"];
    } else {
        $destinationPat = "upload/";
        // No profile photo uploaded, add a dummy photo
        $imageFileName = "60111.jpg"; // Replace with the filename of your dummy photo
        $profile = $destinationPat . $imageFileName;
    }

    // Check if an image was uploaded
    $imageUploaded = isset($_FILES["image"]) && $_FILES["image"]["error"] !== UPLOAD_ERR_NO_FILE;

    // Process the image if uploaded
    if ($imageUploaded) {
        $image = $_FILES["image"];
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
        $destinationPath = "upload/"; // Set your desired destination path
        $imageFileName = uniqid() . "." . $imageExtension;
        $imageDestination = $destinationPath . $imageFileName;

        if (!move_uploaded_file($imageTmpPath, $imageDestination)) {
            echo "Failed to upload the image.";
            exit();
        }
    } else {
        // No image uploaded
        $imageFileName ="60111.jpg";
    }

    // Construct the SQL query
    $timestamp = date("Y-m-d H:i:s");
    $query = "INSERT INTO answers (username, answer, image, timestamp, fname, lname, profile, aid) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ssssssss", $username, $answer, $imageDestination, $timestamp, $fname, $lname, $profile, $aid);

    // Execute the query
    if (mysqli_stmt_execute($stmt)) {
        // Redirect to home.php or display a success message
        echo '<script>window.location.href = "home.php#answeritem";</script>';
        exit();
    } else {
        // Display error message
        echo "Error storing question: " . mysqli_error($con);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($con);

// ...
?>