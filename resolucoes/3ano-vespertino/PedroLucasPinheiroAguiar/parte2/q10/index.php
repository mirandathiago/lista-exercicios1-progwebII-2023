<?php
	$metodo = $_SERVER["REQUEST_METHOD"];
	$SemD = $_POST["SemD"] ?? 1;
	$Dia = " ";
	$Res = "Final de Semana";
	if ($SemD == 1) {
		$Dia = "Domingo";
	} else {
		if ($SemD == 2) {
			$Dia = "Segunda";
		} else {
			if ($SemD == 3) {
				$Dia = "Terça";
			} else {
				if ($SemD == 4) {
					$Dia = "Quarta";
				} else {
					if ($SemD == 5) {
						$Dia = "Quinta";
					} else {
						if ($SemD == 6) {
							$Dia = "Sexta";
						} else {
							$Dia = "Sabado";
						}
					}
				}
			}
		}
	}
	if ($SemD > 1 && $SemD < 7){
		$Res = "Dia Util";
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="index.php" method="post">
			   <fieldset>
				<legend>Selecione o Dia da Semana:</legend>
				<div>
				  <input type="radio" id="Domingo" name="SemD" value="1">
				  <label for="Domingo">Domingo (1)</label>
				</div>
				<div>
				  <input type="radio" id="Segunda" name="SemD" value="2">
				  <label for="Segunda">Segunda (2)</label>
				</div>
				<div>
				  <input type="radio" id="Terça" name="SemD" value="3">
				  <label for="Terça">Terça (3)</label>
				</div>
				<div>
				  <input type="radio" id="Quarta" name="SemD" value="4">
				  <label for="Quarta">Quarta (4)</label>
				</div>
				<div>
				  <input type="radio" id="Quinta" name="SemD" value="5">
				  <label for="Quinta">Quinta (5)</label>
				</div>
				<div>
				  <input type="radio" id="Sexta" name="SemD" value="6">
				  <label for="Sexta">Sexta (6)</label>
				</div>
				<div>
				  <input type="radio" id="Sabado" name="SemD" value="7">
				  <label for="Sabado">Sabado (7)</label>
				</div>
			    </fieldset>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				if($metodo == "POST"){
					echo "<p class='alerta-verde'>$Dia é um $Res</p>";
				} else {
					echo "<p class='alerta-amarelo'>aguardando o envio</p>";
				}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>