<?php

	class Catalogo{
		static $indice=0;

		function __construct($nome){
			self::$indice++;
			$i = self::$indice;
			echo 'A Aplicacao ' .$nome .', foi criada!<br>';
		}
	}

?>