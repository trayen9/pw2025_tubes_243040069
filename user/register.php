<?php
$conn = new mysqli("localhost", "root", "", "pw2025_tubes_243040069");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
if ($conn->query($query) === TRUE) {
    echo "<script>alert('Registration successful');window.location='../user.php';</script>";
} else {
    echo "<script>alert('Error: $conn->error');window.location='../user_register.php';</script>";
}
$conn->close();
?>