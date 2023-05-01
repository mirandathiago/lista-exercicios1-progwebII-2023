<?php
	$ds = $_POST["ds"] ?? 1;
	$resposta = "final de Semana";
	if ($ds == 1) {
		$dia = "Domingo";
	} else {
		if ($ds == 2) {
			$dia = "Segunda";
		} else {
			if ($ds == 3) {
				$dia = "Terça";
			} else {
				if ($ds == 4) {
					$dia = "Quarta";
				} else {
					if ($ds == 5) {
						$dia = "Quinta";
					} else {
						if ($ds == 6) {
							$dia = "Sexta";
						} else {
							$dia = "Sabado";
						}
					}
				}
			}
		}
	}
	if ($ds > 1 && $ds < 7){
		$resposta = "dia Util";
	}
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
		<h1>Calendario</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informações</h2>
			<form action="index.php" method="post">
			   <fieldset>
				<legend>Selecione o Dia:</legend>
				<div>
				  <input type="radio" id="Domingo" name="ds" value="1">
				  <label for="Domingo">Domingo (1)</label>
				</div>
				<div>
				  <input type="radio" id="Segunda" name="ds" value="2">
				  <label for="Segunda">Segunda (2)</label>
				</div>
				<div>
				  <input type="radio" id="Terça" name="ds" value="3">
				  <label for="Terça">Terça (3)</label>
				</div>
				<div>
				  <input type="radio" id="Quarta" name="ds" value="4">
				  <label for="Quarta">Quarta (4)</label>
				</div>
				<div>
				  <input type="radio" id="Quinta" name="ds" value="5">
				  <label for="Quinta">Quinta (5)</label>
				</div>
				<div>
				  <input type="radio" id="Sexta" name="ds" value="6">
				  <label for="Sexta">Sexta (6)</label>
				</div>
				<div>
				  <input type="radio" id="Sabado" name="ds" value="7">
				  <label for="Sabado">Sabado (7)</label>
				</div>
			    </fieldset>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				echo "<p class='alerta-verde'>$dia é um $resposta</p>";
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>