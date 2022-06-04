<?php

	$x = 10;

	$y =& $x;

	echo "x = $x<br>";
	echo "Y = $y<br>";

	$y = 15;

	echo "x = $x<br>";
	echo "Y = $y<br>";
