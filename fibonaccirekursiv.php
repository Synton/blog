<?php
function fibo($zahl = 0)
    {
        $zahl = (int)$zahl;
        if($zahl < 0) {
            $zahl = 0;
        }
        switch($zahl) {
        case 0:
        case 1:
            return 1;
            break;

        default:
            return fibo($zahl-1) + fibo($zahl-2);
            break;

        }
    }
    $z = 31;
    for($i=1; $i<=$z; $i++) {
        echo $i.". Fibonacci Zahl: ".fibo($i)."<br />\n";
    }
        /*function fib($n) { 
	 	if($n == 0){
	 		return 0;
	 	}
	 	if($n == 1 || $n == 2){ 
	  		return 1; 
	  	}
	  	$x = fib($n-1)+fib($n-2);
	 	echo ($x);
	 	echo("</br>");
	 	return ($x);

	  	}
	fib(10);*/
?>