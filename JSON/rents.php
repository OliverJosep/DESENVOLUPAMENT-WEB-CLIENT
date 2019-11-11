<?php
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "josep", "123", "rates");
$stmt = $conn->prepare("SELECT * FROM rent");
if(isset($_REQUEST['redeemable'])){
  $stmt = $conn->prepare("SELECT * FROM rent WHERE redeemable=".$_REQUEST['redeemable']);
};
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);
?>
