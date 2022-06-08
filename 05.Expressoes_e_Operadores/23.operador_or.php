<?php
	
	if (5 > 2 || 3 < 4) {
		echo "A operação 1 é verdadeira <br>";
	}

	if (5 > 2 || 30 < 4) {
		echo "A operação 2 é verdadeira <br>";
	}

	if (5 > 20 || 3 < 4) {
		echo "A operação 3 é verdadeira <br>";
	}	

	if (5 > 20 || 30 < 4) {
		echo "A operação 4 é verdadeira <br>";
	}

	$a = 10;
	$b = 20;
	$c = 30;
	$d = 40;

	if ($a > $b || $d > $c) {
		echo "A operação 5 é verdadeira <br>";
	}

	if (($a > $b || $d > $c) && ($c < $d)) {
		echo "A operação 6 é verdadeira <br>";
	}
