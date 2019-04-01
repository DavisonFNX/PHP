<?php


	require_once("config.php");

	session_regenerate_id();
	echo session_id();

	var_dump($_SESSION);

	echo "<br>";

	echo session_save_path();

	echo "<br>";

	var_dump(session_status());

	switch(session_status()) {

		case PHP_SESSION_DISABLED:
			echo "as sessões estiveram desabilitadas";
			break;

		case PHP_SESSION_NOME:
			echo "as sessões estiverem habilitadas, mas nenhuma existir";
			break;
		
		case PHP_SESSION_ACTIVE:
			echo "as sessões estiverem desabilitadas";
			break;
	
	
	}

?>