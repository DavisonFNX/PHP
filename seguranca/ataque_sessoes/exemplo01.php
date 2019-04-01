<?php

	session_start();

	//depois de verificar login e senha reinicie o ID da sessao
	session_destroy();

	session_start();
	
	//gera novo ID
	session_regenerate_id();

	echo session_id();

?>