<?php
$pontoA = $_GET['intervaloA'];
$pontoB = $_GET['intervaloB'];
$q = 0;
$pares = 0;
if ($pontoA < $pontoB) {
    for ($i = $pontoA; $i < $pontoB; $i++) {
        if ($i % 2 == 0) {
            $pares++;
        }
        $q++;
    }
} else if ($pontoA > $pontoB) {
    for ($i = $pontoB; $i < $pontoA; $i++) {
        if ($i % 2 == 0) {
            $pares++;
        }
        $q++;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questao 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
                if ($pontoA == $pontoB) {
                    echo "Os número do fim e do inicio do intervalo são iguais";
                } else {
                    echo "O Intervalo entre $pontoA e $pontoB possui $q Números";
                    echo "<p>Deste intervalo $pares são pares</p>";
                }
            ?>
       
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>