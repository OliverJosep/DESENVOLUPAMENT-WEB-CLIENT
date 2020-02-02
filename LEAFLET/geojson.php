<?php
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "josep", "123", "Locations");
$stmt = $conn->prepare("select latitude,longitude from Cities");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);
?>
