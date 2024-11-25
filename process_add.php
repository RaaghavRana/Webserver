<?php
include 'Includes/db_connect.inc';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form inputs
    $petname = $_POST['petname'];
    $description = $_POST['description'];
    $age = $_POST['age'];
    $type = $_POST['type'];
    $location = $_POST['location'];
    $image = $_FILES['image']['name'];
    $caption = $_POST['caption'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $target_dir = "images/";
    $target_file = $target_dir . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        $sql = "INSERT INTO pets (petname, description, age, type, location, image, caption)
        VALUES ('$petname', '$description', '$age', '$type', '$location', '$image', '$caption')";

        if ($conn->query($sql) === TRUE) {
            echo "New pet added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading the image.";
    }

    $conn->close();
}
