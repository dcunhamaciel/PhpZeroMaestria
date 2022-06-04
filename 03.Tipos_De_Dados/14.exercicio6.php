<?php

	$carro = [
		"marca" => "BMW",
		"rodas" => 4,
		"teto_solar" => true,
		"velocidade_maxima" => 200,
		"blindado" => false
	];

	print_r($carro);

	echo "<br>";
	echo $carro["marca"];
	echo "<br>";
	echo $carro["velocidade_maxima"];
