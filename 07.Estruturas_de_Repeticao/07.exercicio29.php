<?php

	$array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

	$i = 0;

	while ($i < count($array)) {
		if ($array[$i] == 30 || $array[$i] == 40) {
			$i++;
			continue;
		}

		echo "Elemento: $array[$i] <br>";		

		$i++;
	}
