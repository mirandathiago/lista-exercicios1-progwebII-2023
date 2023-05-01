<!DOCTYPE html>

<!-- crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela. 
Entrada: 2 5 1
Saída: Menor Número: 1 e o Maior Número: 5 -->

<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1> Maior e Menor Número</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado</h2>
            <?php
             $num1=$_GET['num1'] ?? 0 ;
             $num2=$_GET['num2'] ?? 0 ;
             $num3=$_GET['num3'] ?? 0 ;

			 $maior=$num1;
			 $menor=$num1;

			if($num2 > $maior){
				$maior = $num2;
			}
			if($num3 > $maior){
				$maior = $num3;
			}
	
			if($num2 < $menor){
				$menor = $num2;
			}
			if($num3 < $menor){
				$menor = $num3;
			}
            
			echo "O Maior número é $maior e o menor é $menor<br>";
			?>
			
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>