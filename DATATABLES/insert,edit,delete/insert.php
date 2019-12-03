<?php
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "josep", "123", "Cronose2");

$name = $_POST['name'];
$email = $_POST['email'];
$password= $_POST['password'];

$sql = "INSERT INTO User (username, email, password)
VALUES ('$name', '$email', '$password')";

$conn->close();

?>
