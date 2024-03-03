<?php
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "signup_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['new-name'];
$email = $_POST['new-email'];
$password = $_POST['new-password'];
$address = $_POST['new-address'];

$sql = "INSERT INTO users (name, email, password, address) VALUES ('$name', '$email', '$password', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
