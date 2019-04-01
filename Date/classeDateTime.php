<?php

	$dt = new DateTime();

	echo $dt->format("d/m/Y H:i:s");
	echo "<br>";

	$periodo = new DateInterval("P15D");
	
	echo $dt->format("d/m/Y H:i:s");

	$dt->add($periodo);
	echo "<br>";

	echo $dt->format("d/m/Y H:i:s");

?>