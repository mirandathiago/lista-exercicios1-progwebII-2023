<?php 
	$valor = $_GET["valor"];
	$cedulas = 0;
	
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
	<div class="container">
		<div class="box resposta">
			<h2>Resultado</h2>
            <?php 
				echo "<br>Valor informado:	".$valor."<br>";
                while ($valor >= 100) {
					$valor -= 100;
					$cedulas++;
				}

                echo "<br>".$cedulas." notas de R$100<br>";
				$cedulas = 0;

				while ($valor >= 50) {
					$valor -= 50;
					$cedulas++;
				}

                echo "<br>".$cedulas." notas de R$50<br>";
				$cedulas = 0;

				while ($valor >= 20) {
					$valor -= 20;
					$cedulas++;
				}
                echo "<br>".$cedulas." notas de R$20<br>";
				$cedulas = 0;

				while ($valor >= 10) {
					$valor -= 10;
					$cedulas++;
				}
                echo "<br>".$cedulas." notas de R$10<br>";
				$cedulas = 0;

				while ($valor >= 5) {
					$valor -= 5;
					$cedulas++;
				}
                echo "<br>".$cedulas." notas de R$5<br>";
				$cedulas = 0;

				while ($valor >= 2) {
					$valor -= 2;
					$cedulas++;
				}
                echo "<br>".$cedulas." notas de R$2<br>";
				$cedulas = 0;

				while ($valor >= 1) {
					$valor -= 1;
					$cedulas++;
				}
                echo "<br>".$cedulas." moedas de R$1<br>";
				$cedulas = 0;
				
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>