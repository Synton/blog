<?php
function fibonacci($länge){
	$a = 0;
	$b = 1;
	echo($a);
	echo ("</br>");
	echo($b);
	echo ("</br>");
	for ($i=0; $i < $länge ; $i++) { 
		$x = $a + $b;
		echo($x);
		echo ("</br>");
		$a = $b;
		$b = $x;

	}
}

fibonacci(50);

?>