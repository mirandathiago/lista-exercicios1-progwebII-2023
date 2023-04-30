<?php
	$divida = $_GET["divida"] ?? 0;
	$taxa = $_GET["taxa"] ?? 0;
	$mensal = $_GET["mensal"] ?? 0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>Despesa</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="get">
				
				<label>Valor da dívida (R$):
					<input type="number" id="number" name="divida" min="0" value="<?=$divida?>" required>
				</label>
				<label>Taxa de juros mensal (%):
					<input type="number" id="number" name="taxa" min="0" value="<?=$taxa?>"  required>
				</label>
				<label>Valor mensal pago (R$):
					<input type="number" id="number" name="mensal" min="0" value="<?=$mensal?>"  required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<?php
                $metodo = $_SERVER["REQUEST_METHOD"];
		
				if($metodo == "GET" && isset($_GET["enviar"])){
					$juros = $taxa / 100;
					$mes = 0;
					while($divida > 0){
						$divida = ($divida + ($divida * $juros)) - $mensal;
						$mes++;
					}
					echo"Serão necessários $mes meses para quitar a dívida.<br>";
				}else{
					echo"<p>Aguardando Operação</p>";}
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>