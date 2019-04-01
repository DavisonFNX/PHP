<?php 
	$meses = array(
		"Janeiro","Fevereiro", "Março",
		"Abril", "Maio", "junho",
		"julho", "Agosto", "Setembro",
		"Outubro", "Novembro", "Dezembro"
	);

	foreach ($meses as $mes) {
		echo "O mês é: ".$mes."<br>";
	}

	echo "<br>"

	foreach ($meses as $index => $mes) {
		echo "Indice: ".$index."<br>"
		echo "O mês é: ".$mes."<br><br>";
	}

	<form>
		<input type="text" name="nome">
		<input type="date" name="nascimento">
		<input type="submit" name="OK">
	</form>

	if(isset($_GET)){

		foreach ($_GET as $key => $value) {
			
			echo "Nome do campo: ". $key. "<br>";
			echo "Valor do campo: ". $value;
			echo "<hr>";
		}
	}

?>