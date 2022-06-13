<?php

	function parOuImpar($numero) 
	{
		if ($numero % 2 == 0) {
			echo "O número $numero é par <br>";
		} else {
			echo "O número $numero é impar <br>";
		}
	}

	parOuImpar(30);
	parOuImpar(11);
	parOuImpar(22);
