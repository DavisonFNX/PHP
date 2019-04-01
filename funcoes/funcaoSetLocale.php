<?php
	//Exibe padrao U
	setlocale(LC_ALL, "pt_BR");
	//Exibe padrao linux
	setlocale(LC_ALL, "pt_BR.utf-8");
	//Exibe windows
	setlocale(LC_ALL, "portuguese");
	//usar esta para atender todas  as plataformas
	setlocale(LC_ALL, "pt-BR", "pt_BR.utf-8", "portuguese");

	echo ucwords(strftime("%A %B"));

?>