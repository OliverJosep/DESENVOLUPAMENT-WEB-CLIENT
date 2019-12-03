<?php
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "josep", "123", "Cronose2");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password= $_POST['password'];

$sql = "update User set username = '$name', email = '$email', password = '$password' where id = '$id'";

$conn->close();

?>
