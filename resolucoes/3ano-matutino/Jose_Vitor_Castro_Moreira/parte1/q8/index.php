<?php
	$valor = $_GET["valor"] ?? 0;
	$parcela = $_GET["parcela"] ?? 0;
	$juros = (($valor * 4) * $parcela) / 100;
	$montante = $juros + $valor;
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
		<h1>Calculadora de Juros</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="get">
				<label>Valor do celular:
					<input type="number" id="number" name="valor" step="0.01" min="0"  required value="<?=$valor?>">
				</label>

				<label>Quantidade de parcelas:
					<input type="number" id="number" name="parcela"  min="0"  required value="<?=$parcela?>">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor Total</h2>
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];

				if($metodo == "GET" && isset($_GET["enviar"])){
					if($parcela == 0){
						echo "O celular será pago à vista pelo valor de R$ {$montante}<br>";
					}else{
						$mensal = round($montante / $parcela, 2);
						echo "O celular será pago em {$parcela} vezes, no valor de R$ {$mensal}. <br> Totalizando R$ {$montante}<br>";
					}
				}else{
					echo "Aguardando Informação";
				}
			?>
			<br>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>