<?php

	$x = 10;

	function teste() {

		$x = 5;

		echo "$x local <br>";
	}

	echo "$x global <br>";

	teste();
