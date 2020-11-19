<?php

$numero=$_REQUEST['num'];


//Primera y Ultima Fila
$i=1;
while ($i <= $numero ) {
	$tope=$tope.$numero;
	$i++;
}

//Calcula el tamaño de digitos del número
$num_length = strlen((string)$numero);

$i=1;
while ($i <= $num_length ) {
	$espacio=$espacio." ";
	$i++;
}


//Fila intermedia
$i=1;
while ($i < $numero ) {
	if ($i==1){
	$intermedia=$numero;	
	}
	
	if ($i<$numero-1){
		$intermedia=$intermedia.$espacio;
	}
	
	if ($i==$numero-1){
		$intermedia=$intermedia.$numero;
	}
	
	$i++;
}


//Formar el cuadro
$i=1;
while ($i <= $numero ) {
	if ($i==1){
	$output=$tope."<br>";	
	}
	
	if ($i<$numero-1){
		$output=$output.$intermedia."<br>";
	}
	
	if ($i==$numero && $i>1){
		$output=$output.$tope;
	}
	
	$i++;
}
	
echo "<pre>".$output."</pre>";
