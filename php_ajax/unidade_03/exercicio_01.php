<?php
	//Passo 1 - Abrir a conexao com o banco de dados
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "andes";
	$conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

	//Passo 2 - Testar a conexao
	if (mysqli_connect_errno()){
		die("Conexao falhou" . mysqli_connect_errno());
	}
?>

<?php
//Passo 3 - Abrir consulta ao banco de dados
	$consulta_categorias = "SELECT nomeproduto";
	$consulta_categorias .= " FROM produtos";
	//$consulta_categorias .= " WHERE categoriaID";
	$categorias = mysqli_query($conecta, $consulta_categorias);

	if (!$categorias){
		die("Falha na consulta ao banco.");
	}
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
    	<ul>

    	<?php
    	//Passo4 - listagem dos dados
    		while( $registro = mysqli_fetch_assoc($categorias)) {
    	?>
    			<li><?php echo $registro["nomeproduto"]; ?></li>
    	<?php
    		}
    	?>
    	</ul>

    	<?php
    	//Passo 5 - Liberar dados da memoria
    		mysqli_free_result($categorias);
    	?>

    </body>
</html>

<?php
	//Passo 6 - Fechar a conexao
	mysqli_close($conecta);
?>