<?php

	$array = [5, "Matheus", true, false, "Opa", 12.8, "Teste", true, [], "Palavra", 5, 10, "Alô"];

	$x = count($array);
	$y = 0;

	while ($y < $x) {
		if (is_string($array[$y])) {
			echo $array[$y] . "<br>";
		}

		$y++;
	}
