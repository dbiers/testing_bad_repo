<?php

// SQL injection vulnerability
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($connection, $query);

// Cross-Site Scripting (XSS) vulnerability
$name = $_POST['name'];
echo "<div>Welcome, " . $name . "</div>";

// Command injection vulnerability
$filename = $_GET['filename'];
system("ls " . $filename);

// Unvalidated input vulnerability
$email = $_POST['email'];
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p>Valid email address</p>";
} else {
    echo "<p>Invalid email address</p>";
}

// File inclusion vulnerability
$page = $_GET['page'];
include($page . '.php');

?>
