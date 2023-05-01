<?php
$A = $_POST["A"] ?? 1;
$B = $_POST["B"] ?? 1;
$C = $_POST["C"] ?? 1;

$delta = pow($B, 2) - 4 * $A * $C;
$quadratica1 = (-$B + sqrt($delta)) / (2 * $A);
$quadratica2 = (-$B - sqrt($delta)) / (2 * $A);

$quadratica1 = number_format($quadratica1, 2, '.', '');
$quadratica2 = number_format($quadratica2, 2, '.', '');
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
		<h1>RAIZ</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="q_stao4.php" method="post">
				
				<label>Informe A:
					<input type="number" name="A" value="<?=$A?>" required>
				</label>
                <label>Informe B:
					<input type="number" name="B" value="<?=$B?>" required>
				</label>
				<label>Informe C:
					<input type="number" name="C" value="<?=$C?>" required>
				</label>
								
				<button name="enviar"> Calcular </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
           <?php 
         if ($delta < 0) {
			echo "A equação não possui raízes reais.";
		 }else if($delta == 0){
			echo " Delta eh igual a 0, logo a equação possui uma única raiz real";
		   echo "<div class='item'> X = {$quadratica1}";}
		   else {
			echo "<div class='item'> X1 = {$quadratica1}";
			echo "<div class='item'> X2 = {$quadratica2}";
		   }
		   
           ?>
		  
		</div>
	</div>
</body>
</html>