<?php
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "josep", "123", "Cronose2");

$id = $_REQUEST['id'];

$sql = "delete from User where id ='$id'";

$conn->close();

?>
