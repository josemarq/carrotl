<?php
$num = $_REQUEST['num'];
$myArray = explode(',', $num);
$arrlength = count($myArray);

//Array no ordenada
echo "Not Ordered ";
print_r($myArray);

$j = 0;
while ($j < $arrlength) {
    $i = 0;
    while ($i < $arrlength - 1) {
		
		//Intercambia los valores del array poniendo el más alto delante del menor
        if ($myArray[$i] > $myArray[$i + 1]) {
            $numTemporal = $myArray[$i + 1];
            $myArray[$i+1] = $myArray[$i];
            $myArray[$i] = $numTemporal;
        }
        $i++;
    }
    $j++;
}

//Array ya ordenada
echo "<br>Ordered ";
print_r($myArray);

//Imoprime la lista ordenada
echo "<br><br>Ordenado:<br>";
for ($x = 0; $x < $arrlength; $x++) {
    echo $myArray[$x];
    echo "<br>";
}
