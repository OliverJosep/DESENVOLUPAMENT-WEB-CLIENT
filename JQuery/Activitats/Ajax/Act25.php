<?php

if ($_REQUEST['addition'] == "addition"){
  echo "Addition: ";
  echo $_REQUEST['number1'] + $_REQUEST['number2'];
}
if ($_REQUEST['subtract'] == "subtract"){
  echo "Subtract: ";
  echo $_REQUEST['number1'] - $_REQUEST['number2'];
}
if ($_REQUEST['product'] == "product"){
  echo "Product: ";
  echo $_REQUEST['number1'] * $_REQUEST['number2'];
}
if ($_REQUEST['division'] == "division"){
  echo "Division: ";
  echo $_REQUEST['number1'] / $_REQUEST['number2'];
}
