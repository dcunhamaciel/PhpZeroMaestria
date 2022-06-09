<?php

	$idade1 = 16;
	$idade2 = 18;
	$idade2 = 26;

	$maioridade = 18;

	$msgMaior = "Você é maior de idade <br>";
	$msgMenor = "Você NÃO é maior de idade <br>";

	if ($idade1 >= $maioridade) {
		echo "1 - " . $msgMaior;
	} else {
		echo "1 - " . $msgMenor;
	}

	if ($idade2 >= $maioridade) {
		echo "2 - " . $msgMaior;
	} else {
		echo "2 - " . $msgMenor;
	}

	if ($idade3 >= $maioridade) {
		echo "3 - " . $msgMaior;
	} else {
		echo "3 - " . $msgMenor;
	}
