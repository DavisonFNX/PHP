<?php 
	$condicao = true;

	while ($condicao) {
		$numero = rand(1, 10);

		if ($numero ===3){
			echo "TRÊS";
			$condicao = false;
		}
		echo $numero. " ";
	}
	echo "<br>";
	echo "<br>";


	$total = 100;
	$desconto = 0.9;

	do {
		$total *= $desconto;

	} while ($total > 100);

	echo $toral;

?>