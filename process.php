<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user information
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Format the data
    $userData = "Name: $name\nEmail: $email\nPhone: $phone\n\n";

    // Specify the file path
    $filePath = "user_data.txt";

    // Open the file in append mode
    $file = fopen($filePath, "a");

    // Write the data to the file
    fwrite($file, $userData);

    // Close the file
    fclose($file);

    // Set a session variable for success message
    session_start();
    $_SESSION['success_message'] = 'User information saved successfully!';

    // Redirect to the home page
    header("Location: index.php");
    exit();
} else {
    // Redirect to the form if accessed directly
    header("Location: index.php");
    exit();
}
?>
