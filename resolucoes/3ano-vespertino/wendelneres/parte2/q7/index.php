
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
		<h1>Estruturas de repetição</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Taxa de Metabolismo Basal</h2>
			<form action="index.php" method="post">
			<label>Informe seu nome:
					<input type="text" name="nome">
			<label>Informe a sua idade:
					<input type="number" name="idade">
			   </label>
			  <label> Informe o seu peso em kg:
					<input type="number" name="peso">
			  </label>
			  <label>Informe sua altura em cm:
					<input type="number" name="altura">
			  </label>
			  <label>Informe o seu sexo:
				<select name="sexo">
						<option value="F">FEMININO</option>
						<option value="M">MASCULINO</option>
				</select>
			  </label>
				<button name="enviar"> Calcular</button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>TMB</h2>
			<?php
			$nome = $_POST["nome"]?? "";
			$idade =$_POST["idade"]?? 0;
			$peso =$_POST["peso"]?? 0;
			$altura =$_POST["altura"]?? 0;
			$sexo =$_POST["sexo"] ?? "" ;
			$TMB = 0;
			
			switch ($sexo) {
				case 'M':
					$TMB = 88.36 + (13.4 * $peso) + (4.8 * $altura) -(5.7 *$idade);
					break;
				
				case 'F':
					$TMB = 447.6 +(9.2 *$peso) +(3.1*$altura) -(4.3*$idade);
					break;
					default:
					echo "<p class='alerta-vermelho'>Aguardando os Dados</p>";
					break;
			}
			
			
			?>
			<p class="alerta-amarelo"><?=$nome?> a sua taxa de metabolismo basal (TMB) é de aproximadamente <?=$TMB?> por dia</p>
            <a href="formulario-resposta.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>