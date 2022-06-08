<?php
	
	$a = (int) "12";

	echo $a;
	echo "<br>";
	echo $a + 10;
	echo "<br>";

	if ($a === 12) {
		echo "A é estritamente igual a 12 <br>";
	}

	$b = (float) "3.14843824";

	if ($b === 3.14843824) {
		echo "B é estritamente igual a 3.14843824 <br>";
	}

	$c = (string) 34;

	if ($c = "34") {
		echo "C é estritamente igual a '34' <br>";		
	}
