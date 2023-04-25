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
			<form action="formulario-resposta.php" method="post">
				<label>Nome:
					<input type="text" id="nome" name="nome" required>
				</label>

			
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
<?php
		 
		
		 date_default_timezone_set('America/Sao_Paulo');
		 $hr = date('H:i:s', time());

		 if($hr >= date('05:00:00', time()) && $hr <= date('12:59:59', time())){
			echo "Bom dia";
		}else if($hr >= date('13:00:00', time()) && $hr <= date('18:00:00', time())){
			echo "Boa tarde";
		}else if($hr > date('18:00:00', time()) && $hr <= date('23:59:59', time())){
			echo "Boa noite";
		}else{
			echo "Vai dormir, esta de madrugada";
		}

		foreach($_POST as $entrada){
			echo " {$entrada}";
		}
	?>
		 

            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>