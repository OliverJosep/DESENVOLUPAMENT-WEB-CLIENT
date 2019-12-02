<?php

$rate['basic'] = 15;
$rate['medium'] = 30;
$rate['expert'] = 55;

$request = $_REQUEST["req"];
$txt = "";

foreach ($rate as $key => $price) {
  if ($key == $request){
    $txt .= "$price"."€";
  }
}

echo $txt;

