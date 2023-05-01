<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="questao2.php" method="post">
			
				<label for="nome"> Nomes:
					<textarea id="nome" name="nome" rows="5" cols="40"></textarea><br><br>
				</label>
				<button name="enviar"> Enviar </button>
				
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			
			$metodo = $_SERVER["REQUEST_METHOD"];

			if ($metodo == "POST") {
				
				$nome = $_POST["nome"] ?? "";
				$qtd = 0;
				
				$nome = explode("\n", $_POST['nome']);
				
				$qtd = count($nome);
				$qtd = $qtd -1;

				$ind = rand(0, $qtd - 1);
				echo $nome[$ind];
				
				//$sortear = $nome[array_rand($nome)];
				//echo $sortear;
				
				

			} else {
				echo "<p>Aguardando</p>";
			}
			
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>