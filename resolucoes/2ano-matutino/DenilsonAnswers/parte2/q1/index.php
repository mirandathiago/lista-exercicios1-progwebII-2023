<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Comparação de números</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Comparação de números</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira os números</h2>
			<form action="index.php" method="post">
				<label>primeiro Número:
					<input type="num" id="num2" name="num1" required><br>
				</label>

				<label>Segundo Número:
					<input type="num" id="num2" name="num2" required><br>
				</label>

				<label>Terceiro Número:
					<input type="num" id="num3" name="num3" required><br>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
<?php
	$metodo= $_SERVER["REQUEST_METHOD"];

if($metodo == "POST")
{

	$num1=$_POST["num1"];
	$num2=$_POST["num2"];
	$num3=$_POST["num3"];
															//condição do menor -->
	if($num1<$num2 && $num1<$num3){
		print("O Menor número é {$num1} <br>");

	}else if($num2<$num1 && $num2<$num3){
		print("O Menor número é {$num2}");

	}else{
		print("O Menor número é {$num3} <br>");							
	}
															//condição do maior -->
	if($num1>$num2 && $num1>$num3){
		print("O maior número é {$num1}");

	}else if($num2>$num1 && $num2>$num3){
		print("O maior  número é {$num2}");

	}else{
		print("O maior  número é {$num3} <br>");							
	}
															//condiçao de igualdade

	if($num1==$num2 && $num1==$num3){
		print("Os número são iguais pt1 <br>");

	}else if($num2==$num1 && $num2==$num3){
		print("Os número são iguais pt2 <br>");

	}else if($num3==$num1 && $num3==$num2){
		print("Os número são iguais pt3");						
	}
	

					
}else{															//fim do if de método

}

?>		
        
		</div>
	</div>
</body>
</html>