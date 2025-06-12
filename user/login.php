<?php
session_start();
$conn = new mysqli("localhost", "root", "", "pw2025_tubes_243040069");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$username = $_POST['admin'];
$password = $_POST['1'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Login failed');window.location='../user.php';</script>";
}
$conn->close();
?>