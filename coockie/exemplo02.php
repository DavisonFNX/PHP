<?php
	
	if (isset($_COOCKIE["NOME_DO_COOCKIE"])){
		$obj = json_decode($_COOCKIE["NOME_DO_COOCKIE"], true);
		echo $obj->empresa;
	}

?>