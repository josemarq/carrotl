<?php
$i=1;

 while ($i <= 100 ) {
	 $output = $i;
	 
	 //Multiplo de 3
	 if ($i % 3 == 0) {
		 $output="ping";
	 }

	 //Multiplo de 5
	 if ($i % 5 == 0) {
		 $output="pong";
	 }
	 
	 //Multiplo de 3 y de 5
	 if (($i % 3 ==0) && ($i % 5 == 0)) {
		 $output="PingPong";
	 }
	
	 //Salida
	 echo $output."<br>";
	
	 $i++;
 }
