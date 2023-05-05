<?php

	$num = $_POST["num"] ?? "";

?>
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
		<h1>Questão 2 - Parte 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>2- Crie um formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número.</h2>
			<form action="index.php" method="post">
				<label>Número:
					<input type="number" id="num" name="num" required value="<?=$num?>" >
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					$num = ($num == "") ? 1 : $num;
					$dobro = $num * 2;
					$metade = $num / 2;

					echo "<p class='alerta-verde'>O dobro de {$num} é {$dobro}</p>";
					echo "<p class='alerta-verde'>A metade de {$num} é {$metade}</p>";


				}		
			?>
			
			
			
			
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>