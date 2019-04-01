<?php

	function ola() {

		return "Olá mundo!<br>";

	}

	echo ola();

	//parametro com valor padrao tem que vir primeiro
	function ola2($texto = "mundo", $periodo = "Bom dia") {

		return "Olá $texto! $periodo!<br>";

	}

	echo ola2();
	echo ola2("", "Boa noite");
	echo ola2("Glaucio", "Boa tarde");
	echo ola2("João", "");

?>
