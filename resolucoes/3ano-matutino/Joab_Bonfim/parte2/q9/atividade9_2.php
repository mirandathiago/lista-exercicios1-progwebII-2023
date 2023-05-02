<?php

$clima = $_POST["clima"];


switch ($clima) {
	case 'ensolarado':
		$mens = "O local mais apropriado é o clube.";
		break;
	case 'ameno':
		$mens = "O local mais apropriado é o parque.";
		break;
	case 'chuvoso':
		$mens = "O local mais apropriado é o cinema.";
		break;
	case 'nublado':
		$mens = "O local mais apropriado é o museu.";
		break;
	case 'tempestuoso':
		$mens = "O local mais apropriado é ficar em casa.";
		break;
	default:
	    $mens = "Selecione um clima válido.";
		break;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista de Atividades</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css_comum.css">
</head>
<body>
	<header>
		<h1>Atividade 9</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Qual o clima?</h2>
			<form action="atividade9_2.php" method="post">
            <label>Como está o clima hoje:</label>
                <select id="clima" name="clima">
                    <option value="ensolarado">ensolarado</option>
                    <option value="ameno">ameno</option>
                    <option value="chuvoso">chuvoso</option>
                    <option value="nublado">nublado</option>
	                <option value="tempestuoso">tempestuoso</option>
			</form>
		</div>
		<div class="box resposta">
			<h2>Então vamos para:</h2>

            <?php
                //var_dump($_SERVER["REQUEST_METHOD"]);
                $met = $_SERVER["REQUEST_METHOD"];

                if($met == "POST"){
                    echo"<p>{$mens}</p>";
                }else{
                    echo"<p>Não é possivel efetuar a operação, por favor verifique o formulário de envio</p>";
                }
            
            ?>
			
		</div>
	</div>
</body>
</html>