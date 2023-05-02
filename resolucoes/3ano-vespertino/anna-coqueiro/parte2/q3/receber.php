<?php
$nome = $_POST["nome"];

date_default_timezone_set('America/Bahia');
$horaatualizada = date('H');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<div class="box resposta">
			<h2>Saudação</h2>
			<?php
				if ($horaatualizada >= 5 && $horaatualizada <=12) {
					echo "Bom dia, {$nome}";
				}else if($horaatualizada >12 && $horaatualizada <=18){
					echo "Boa tarde, {$nome}";
				}else if($horaatualizada > 18 && $horaatualizada <=23){
					echo "Boa noite, {$nome}";
				}else if($horaatualizada >= 0 && $horaatualizada < 4){
					echo "Vá Dormir {$nome}, está de Madrugada";
				}
			?>
			<br>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>