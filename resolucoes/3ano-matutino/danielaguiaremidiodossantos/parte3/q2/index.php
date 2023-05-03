<?php

if($_SERVER ["REQUEST_METHOD"] == " POST "){
	$valor = isset( $_POST ["valor"])? intval ($_POST ["valor"]):null;

	if(!is_null($valor)){
		$cont = 7 ;
		$tabuada ="<tabela><tbody>";

		while ($cont <= 7 ) {
			$resultado = $cont * $valor ;
			
			$tabuada .= "<tr><td> { $valor } x { $cont } = </td><td> { $resultado }</td></tr>";
			$cont ++;

			$tabuada .="</tbody></table>";
			$mensagem = $tabuada;

		
	
		}
	}
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family" rel="stylesheet">
	<link> 
	<title>Tabuada</title>
</head>
<body>

<header>
		<h1>numero inteiros</h1>
</header>
	<div class="container">
		<div class="box resposta">

            <a href="receber2.php" class="link">de a volta</a>

</body>
</html>