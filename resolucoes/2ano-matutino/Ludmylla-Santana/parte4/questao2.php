<?php
    $noms = $_POST["nombres"] ?? "";

	$nomes = explode("\n", $noms);

	$contagem = count($nomes);

	$sort = rand(0, $contagem -= 1);

    $mens = "O nome sorteado foi {$nomes[$sort]}";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista de Atividades</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Atividade 4</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Sorteador de nomes</h2>
			<form action="questao2.php" method="post">
				<label>Lista de Nomes
                    <br>
					<input type="textarea" name="nombres" value="<?=$noms?>" required>
				</label>
                <br>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>

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