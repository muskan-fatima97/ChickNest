<?php
require('connection.php'); // Ensure this file correctly sets up the $con variable for the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if all required data is received
    if (isset($_POST['title'], $_POST['description']) && isset($_FILES['imageFile'])) {
        $title = mysqli_real_escape_string($con, $_POST['title']);
        $description = mysqli_real_escape_string($con, $_POST['description']);
        $imageFile = $_FILES['imageFile'];

        // Handle file upload
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($imageFile['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is an actual image or fake image
        $check = getimagesize($imageFile['tmp_name']);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($imageFile['size'] > 500000) { // 500 KB limit
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & WEBP files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($imageFile['tmp_name'], $targetFile)) {
                // Insert data into the database
                $imageURL = mysqli_real_escape_string($con, $targetFile);
                $query = "INSERT INTO blogs (title, description, imageURL) VALUES ('$title', '$description', '$imageURL')";

                if (mysqli_query($con, $query)) {
                    echo "The file " . htmlspecialchars(basename($imageFile['name'])) . " has been uploaded and the post has been added.";
                } else {
                    echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "Required fields are missing.";
    }
} else {
    echo "Invalid request method.";
}
?>
