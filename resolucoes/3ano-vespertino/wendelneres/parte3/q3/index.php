
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
		<h1>Estruturas de repetição</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Intervalo de números</h2>
			<form action="index.php" method="post">
			  <label> Informe o número inicial:
				<input type="number" name="num1">
			  </label>
			  <label>Informe o número final:
				<input type="number" name="num2">
			  </label>
			  
				<button name="enviar"> Calcular</button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resultado</h2>
			<?php
		
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "POST"){
				$n1 = $_POST["num1"] ;
				$n2 = $_POST["num2"];
			for ($n3 = $n1; $n3 <=$n2; $n3++) {
					if($n3 %2 ==0){
						$num_pares[] = $n3;
						$qtd = count($num_pares);	
					}
			}
			//var_dump($num_pares);
			echo "<p>Quantidade de números pares: {$qtd}</p>";
				
				
		}else{
			echo "<p class='alerta-vermelho'>Informe um número</p>";
		}






			?>
			<br>

            <a href="formulario-resposta.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>