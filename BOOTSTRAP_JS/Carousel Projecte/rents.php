<?php
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "josep", "123", "Cronose2");
$stmt = $conn->prepare("SELECT * FROM Offer");
if(isset($_REQUEST['id'])){
  $stmt = $conn->prepare("SELECT * FROM rents WHERE id=".$_REQUEST['id']);
};
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);
?>
