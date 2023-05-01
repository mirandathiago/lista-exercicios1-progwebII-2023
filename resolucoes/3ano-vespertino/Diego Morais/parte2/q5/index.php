<?php
$escolha = $_POST["escolha"] ?? "Par";
$Njogador = $_POST["valor"] ?? 2;
$computador = rand(0,10);
$soma = $Njogador + $computador;


if($soma % 2 == 0 && $escolha == "Par"){
    $par_impar = "par";
    $resultado = "Usuario venceu";
}

else if($soma % 2 != 0 && $escolha == "Par"){
    $par_impar = "impar";
    $resultado = "Computador venceu";
}

else if($soma % 2 == 0 && $escolha == "Impar"){
    $par_impar = "par";
    $resultado = "Computador venceu";
}

else if($Njogador + $computador % 2 != 0 && $escolha == "Impar"){
     $par_impar = "impar";
     $resultado = "Usuario venceu";
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
		<h1>Lista parte-2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Questão-05</h2>
			<form method="post" action="index.php">
                <select name="escolha">
                <option>Par</option>
                <option>Impar</option>
                </select>
                
                
				<label>Digite um valor:
					<input type="number" name="valor" value="2" required >
				</label>
                
								
				<button name="enviar"> Jogar </button>
			</form>
		</div>
		<div class="box resposta">
         <h2>O usuario escolheu <?=$escolha?> e o numero <?=$Njogador?>, O computador sorteou o numero <?=$computador?>, e a soma deles é <?=$soma?>, <?=$soma?> é <?=$par_impar?> e o <?=$resultado?></h2>
			
		</div>
	</div>
</body>
</html>