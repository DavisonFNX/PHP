<?php	

	
	$pessoas = array();

	array_push($pessoas, array(
		'nome'=>'João',
		'idade'=> 20
	));

	array_push($pessoas, array(
		'nome'=>'Glaucio',
		'idade'=> 25
	));

	echo json_encode($pessoas);

	echo " ";

	$json = '[{"nome":"Joao","idade":20},{"nome":"Glaucio","idade":25}]';


	$data = json_dencode($json, true); 

	var_dump($data);

	//https://elias.praciano.com/2016/12/6-compiladores-online-para-estudantes-de-programacao/
?>