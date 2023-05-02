<?php
$nome = $_POST["nome"];

date_default_timezeone_st('America/Bahia');
$horat = date('H');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário: Saudações</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado:</h2>
			<?php
				if ($horat >= 5 && $horat <=12) {
					echo "Bom Dia,{$nome}";
				}else if($horat >=13 && $horat <=18){
					echo "Boa tarde,{$nome}";
				}else if($horat > 18 && $horat <=23){
					echo "Boa noite,{$nome}";
				}else if($horat >= 0 && $horat <= 4){
					echo "Você tem que dormir, {$nome}";
				}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>