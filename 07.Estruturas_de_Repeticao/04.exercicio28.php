<?php

	$x = 4;
	$limite = 30;

	while ($x <= $limite) {
		echo "$x <br>";

		if ($x === 24) {
			echo "Parando o loop";
			break;
		}

		$x += 2;
	}
