

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
		<h1>Formulário da Tabuada</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p><?php $numero = $_GET["numero"] ?? 0;

$x = 1;// a variavel $x é igual a 1 pq quando vc entra em laço de repetição, e vc faz o calculo de
// $x * $numero se eu colocasse que o $x = 0 iria ficar zero sempre e tem que ser 1, para a tabuada funcionar

while($x < 10){
	$multiplica = $x*$numero;
	echo "<br>";
	

	echo "$numero x $x = $multiplica";
	

	$x++; } ?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>