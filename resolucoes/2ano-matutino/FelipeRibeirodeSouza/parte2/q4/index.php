<?php
	$metodo = $_SERVER["REQUEST_METHOD"];
	if($metodo == "POST"){
		$nA=$_POST["nA"];
		$nB=$_POST["nB"];
		$nC=$_POST["nC"];

		$delta = ($nB ** 2) - (4*$nA*$nC);

		$raizum= (-$nB + sqrt($delta))/(2*$nA);

		$raizdois= (-$nB - sqrt($delta))/(2*$nA);

		$mensagem = "Resultado:";
	}else{
		$mensagem = "Informe Valores válidos";
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
		<h1>Calculo das raízes de uma equação de segundo-grau:</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="index.php" method="post">
				<label>Informe o valor A da equação:
					<input type="number" id="numero" name="nA" required step="0.1" value="<?=$nA?>" >
				</label>

				<label>Informe o valor B da equação:
					<input type="number" id="numero" name="nB" required step="0.1" value="<?=$nB?>">
				</label>

				<label>Informe o valor C da equação:
					<input type="number" id="numero" name="nC" required step="0.1" value="<?=$nC?>">
				</label>

				<button name="enviar"> Calcular </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				if($metodo == "POST"){
					echo "<p class='alerta-verde'>$mensagem</p>";
					if($delta < 0){
						echo"<p class='alerta-vermelho'>A equação não possui raizes reais</p>";
					}else if($delta == 0){
						echo"<p class='alerta-verde'>A equação possui apenas 1 raiz real:\n{$raizum}</p>";
					}else{
						echo"<p class='alerta-verde'>A equação possui duas raizes reais:\nx1= {$raizum} e x2= {$raizdois}</p>";
					}
				}else{
					echo "<p class='alerta-vermelho'>$mensagem</p>";
				}	
			?>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>