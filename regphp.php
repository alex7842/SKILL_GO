<?php

include("new.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirmpassword"];
    
    if ($password == $confirm_password) {
        // Handle image upload
       if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
            // Handle image upload
            $image = $_FILES["image"]["tmp_name"];
            $image_data = file_get_contents($image);
            $image_base64 = base64_encode($image_data);
        } else {
            $default_image_path = 'a1.jpg';
        $image_data = file_get_contents($default_image_path);
        $image_base64 = base64_encode($image_data);
        }
    
        
        // Insert data into the database
        $query = "INSERT INTO base1 (name, email, password, image) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $password, $image_base64);
        
        if (mysqli_stmt_execute($stmt)) {
             $_SESSION["login"] = true; // Set login status to true
    $_SESSION["name"] = $name;
   echo "<script>window.location.href='config.php?username=" . urlencode($name) . "';</script>";
            exit(); 
        } else {
            echo "Registration failed: " . mysqli_error($conn);
        }
        
        mysqli_stmt_close($stmt);
    } else {
        echo "Passwords do not match.";
    }
    
    mysqli_close($conn);
}