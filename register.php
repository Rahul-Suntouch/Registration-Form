<?php
$servername = "sql113.infinityfree.com";
$username = "if0_39375984"; // XAMPP default
$password = "Rahulp1234";     // XAMPP default is blank
$dbname = "if0_39375984_testdb"; // Create this in phpMyAdmin

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insert
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
