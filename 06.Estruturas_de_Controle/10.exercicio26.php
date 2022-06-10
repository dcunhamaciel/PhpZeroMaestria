<?php

	$velocidade = 36;
	$velocidadeMaxima = 40;

	if ($velocidade < $velocidadeMaxima) {
		echo "Parabéns, você está em uma velocidade segura <br>";
	} if ($velocidade == $velocidadeMaxima) {
		echo "Cuidado, você está no limite de velocidade <br>";
	} else {
		echo "Você foi multado, velocidade acima do permitido <br>";
	}
