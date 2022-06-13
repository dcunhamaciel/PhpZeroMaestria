<?php

	$array = [];

	for ($i = 1; $i <= 30; $i++) {
		array_push($array, $i);
	}

	function arrayMaiorQueSete($array): array
	{
		$arrayRetorno = [];

		for ($i = 0; $i < count($array); $i++) {
			if ($array[$i] > 7) {
				array_push($arrayRetorno, $array[$i]);
			}
		}

		return $arrayRetorno;
	}

	print_r(arrayMaiorQueSete($array));
