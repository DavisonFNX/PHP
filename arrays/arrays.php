<?php
	$frutas = array("laranja", "abacaxi", "melancia");

	print_r($frutas);

	echo " ";

	$carros[0][0] = "GM";
	$carros[0][1] = "Cobalt";
	$carros[0][2] = "Onix";
	$carros[0][3] = "Camaro";

	$carros[2][0] = "Ford";
	$carros[2][1] = "Fiesta";
	$carros[2][2] = "Fusion";
	$carros[2][3] = "Eco Sports";

	echo $carros[0][3];
	echo " ";

	echo end($carros[1]);

	echo " ";

	$pessoas = array();

	array_push($pessoas, array(
		'nome'=>'João',
		'idade'=> 20
	));

	array_push($pessoas, array(
		'nome'=>'Glaucio',
		'idade'=> 25
	));

	print_r($pessoas);



?>