<?php
	
	//Passo 1 - Abrir conexao
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "andes";
	$conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

	//Passo 2 - Testar conexao
	if (mysqli_connect_errno()){
		dir("Conexao Falhou: ". mysqli_connect_errno());
	}

?>