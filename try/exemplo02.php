<?php
	
	function trataNome($nome){

		if(!$name) {
			throw new Exception("Nenhum nome foi informado.", 1);
			
		}

		echo ucfirst($name). "<br>";
	}

	try {

		trataNome("Joao");
		trataNome("");
		
	} catch (Exception $e) {
		echo $e->getMessage();
	}finally{
		echo "<br>Executou o Try!";
	}

?>