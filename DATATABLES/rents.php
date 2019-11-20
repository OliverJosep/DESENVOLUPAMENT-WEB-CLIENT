<?php
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "josep", "123", "Cronose");
$stmt = $conn->prepare("select id,user.username as name,email,offer.Title as job,Valoration_Average as val1, Personal_Valoration as val2, offer.Description as description, Coin_Price as price from user,offer where user.id = offer.User_Id");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);
?>
