<?php
	
	echo date("d/m/Y H:i:s");

	echo "<br>";
	echo time();
	echo "<br>";

	echo strtotime("2001-09-11");
	echo "<br>";

	$ts = strtotime("2001-09-11");
	echo "<br>";
	echo date("l, d/m/Y", $ts);
	echo "<br>";


?>