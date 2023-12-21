<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Check if the file input is not empty
    if (!empty($_FILES['file']['name'])) {
        // Specify the directory where you want to save the uploaded files
        $uploadDir = 'uploads/';

        // Create the directory if it doesn't exist
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Get the file details
        $fileName = basename($_FILES['file']['name']);
        $targetPath = $uploadDir . $fileName;

        // Check if the file already exists
        if (file_exists($targetPath)) {
            echo "File already exists. Please choose a different file.";
        } else {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetPath)) {
                echo "File uploaded successfully.";
            } else {
                echo "Error uploading file.";
            }
        }
    } else {
        echo "Please select a file to upload.";
    }
}
?>
