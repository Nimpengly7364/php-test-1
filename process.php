<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['password']);
    $con_pass = htmlspecialchars($_POST['confirm_password']);

    if (!empty($name) && !empty($email) && !empty($pass) && !empty($con_pass)) {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h2>Error: Invalid email format.</h2>";
        }
        elseif ($pass !== $con_pass) {
            echo "<h2>Error: Passwords do not match.</h2>";
        } else {
            
            echo "<h2>Form Submitted Successfully!</h2>";
            echo "<p><strong>Name:</strong>$name</p>";
            echo "<p><strong>Email:</strong>$email</p>";
            echo "<p><strong>Password:</strong>$pass</p>";
        }
    } else {
        echo "<h2>Error: All fields are required.</h2>";
    }
} else {
    echo "<h2>Invalid Request</h2>";
}
?>
