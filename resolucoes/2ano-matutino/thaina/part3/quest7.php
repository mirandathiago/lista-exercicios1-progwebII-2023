<?php

$v1=$_POST["v1"] ?? 0;
$valor=$v1;
$cont100=0;
$cont50=0;
$cont20=0;
$cont10=0;
$cont5=0;
$cont2=0;
$cont1=0;

while($v1>0){

	if($v1>=100){
		$v1 -= 100;
		$cont100++;
	}
	else if($v1>=50){
		$v1 -= 50;
		$cont50++;
	}
	else if($v1>=20){
		$v1 -= 20;
		$cont20++;
	}
	else if($v1>=10){
		$v1 -= 10;
		$cont10++;
	}
	else if($v1>=5){
		$v1 -= 5;
		$cont5++;
	}
	else if($v1>=2){
		$v1 -= 2;
		$cont2++;
	}
	else{
		$v1 -= 1;
		$cont1++;
	}
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contador</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="container">
		<div class="box formulario">
			<form action="quest7.php" method="post">
				<label>Valor:
					<input type="number" step="1" name="v1" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<h2>Valor informado: R$ <?=$valor?><br>
				<?=$cont100?> nota(s) de R$100<br>
				<?=$cont50?> nota(s) de R$50<br>
				<?=$cont20?> nota(s) de R$20<br>
				<?=$cont10?> nota(s) de R$10<br>
				<?=$cont5?> nota(s) de R$5<br>
				<?=$cont2?> nota(s) de R$2<br>
				<?=$cont1?> nota(s) de R$1</h2>
            
		</div>
	</div>
</body>
</html>