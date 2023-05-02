
<?php
/*
1- crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.
Entrada: 2 5 1
Saída: Menor Número: 1 e o Maior Número: 5

*/
$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "GET"){
			$num1 = $_GET["num1"] ?? 0;
			$num2 = $_GET["num2"] ?? 0;
			$num3 = $_GET["num3"] ?? 0;
			$maior;
			$menor;
			//testa o maior numero
			if($num1 > $num2){
				$maior = $num1;
			}else{
				$maior = $num2;
			}
			if($maior > $num3){
				
			}else{
				$maior = $num3;
			}
			//testa o menor numero
			if($num1 < $num2){
				$menor = $num1;
			}else{
				$menor = $num2;
			}
			if($menor < $num3){
				
			}else{
				$menor = $num3;
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Maior e menor número</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Maior e menor número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os números</h2>
			<form action="index.php" method="get">
				<label> Número 1:
			    <input type="number" id="num1" name="num1" required value="<?=$num1?>">
				</label>

				<label> Número 2:
			    <input type="number" id="num2" name="num2" required value="<?=$num2?>">
				</label>
				
				<label> Número 3:
			    <input type="number" id="num3" name="num3" required value="<?=$num3?>">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php
			echo "<p class='alerta-vermelho'>Maior Número: {$maior} e o Menor Número: {$menor}</p>";
			?>
			
		</div>
	</div>
</body>
</html>