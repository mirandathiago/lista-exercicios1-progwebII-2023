<?php
	$num = $_POST["num"] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista - parte 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Cálculo: Fatorial</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2></h2>
			<form action="index.php" method="post">
				<label>Número:
					<input value="<?=$num?>" type="number" min="0" id="num" name="num" required>
				</label>

				<button name="enviar"> Calcular </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$method = $_SERVER["REQUEST_METHOD"];
				
				if($method == "POST"){
					$fatorial = 1;

					//fatorial de 0 é igual a 1
					if($num == 0){
						echo "<p>{$num}! = {$fatorial}</p>";
					}else{
						echo "<p>Cálculo: ";
						for($n = 1; $n <= $num; $n++){
							$fatorial = $fatorial * $n;
							echo "{$n}";
							if($n < $num){
								echo " x ";
							}
						}
						echo "<br><strong>{$num}! = <strong>{$fatorial}</strong></p>";
					}
				}else{
					echo "<p>Aguardando envio do formulário.</p>";
				}
			?>
		</div>
	</div>
</body>
</html>