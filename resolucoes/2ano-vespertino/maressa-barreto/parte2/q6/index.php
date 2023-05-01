
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
		<h1>Trabalho de Web </h1>
	</header>

	<div class="container">

		<div class="box formulario">

		<h2> coloque os valores na ordem cresente</h2> <br>

				<form action="index.php" method="Post">

				<label>Informe o lado 1 do triangulo:
					<input type="number" name="num1" step="0.1" required value="<?=$num1?>"  >
				</label>

				<label>Informe o lado 2 do triangulo:
					<input type="number" name="num2" step="0.1" required value="<?=$num2?>"  >
				</label>

				<label>Informe o lado 3 do triangulo:
					<input type="number" name="num3" step="0.1" required value="<?=$num3?>"  >
				</label>


				<button name="enviar"> Enviar </button>

			</form>
		</div>

		<div class="box resposta">

			<h2>Resultado</h2> <br>

			<?php
			
					$num1=$_POST["num1"] ?? 5;
					$num2=$_POST["num2"] ?? 5;
					$num3=$_POST["num3"] ?? 5;
					$num4 = $num1 + $num2 ;


					//você colocou os lados na ordem errada
					
					if($num4 < $num3){
						$repost= "Não da pra formar um triangulo";
					}elseif ($num1 == $num2 && $num2 == $num3) {
						$repost= "Equilatero";
					}elseif ($num3 == $num2) {
						$repost= "Isósceles";
					}else {
						$repost= "Escaleno";
					}
			
			?>
		
					<h3>  <?=$repost?> </h3>
            
		</div>
	</div>
</body>
</html>