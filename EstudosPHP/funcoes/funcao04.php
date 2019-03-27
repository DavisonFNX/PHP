<?php
	$a = 10;

	function trocaValor($a){
		$a = 50;

		return $a;
	}

	echo "<br>";
	echo $a;
	echo trocaValor($a);

	//passagem de parametro por referencia (&)
	function trocaValor(&$a){
		$a = 50;

		return $a;
	}

	echo "<br>";
	echo $a;
	echo trocaValor($a);
?>