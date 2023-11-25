<?php
session_start();

// Check for a success message
if (isset($_SESSION['success_message'])) {
    $successMessage = $_SESSION['success_message'];
    // Clear the session variable to avoid displaying the message again
    unset($_SESSION['success_message']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="card">
        <h2>User Information Form</h2>
        
        <?php
        // Display the success message if it exists
        if (isset($successMessage)) {
            echo '<div class="success-message">' . $successMessage . '</div>';
        }
        ?>

        <form action="process.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="text" name="phone" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

