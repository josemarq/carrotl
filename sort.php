<?php

$num=$_REQUEST['num'];
$myArray = explode(',', $num);

echo "Not Ordered ";
print_r($myArray);

sort($myArray);

echo "<br>Ordered ";
print_r($myArray);

echo "<br><br>Ordenado:<br>";

$arrlength = count($myArray);
for($x = 0; $x < $arrlength; $x++) {
  echo $myArray[$x];
  echo "<br>";
}
