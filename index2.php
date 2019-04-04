<?php
	include 'teste.php';

	new Catalogo('Photoshop');
	new Catalogo('Dreamweaver');
	new Catalogo('Flash');

	echo "Total do indice: ". Catalogo::$indice. "<br>";

?>