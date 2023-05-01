<!--4-Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N. 
Crie um formulário que permita ao usuário informar um número inteiro N e, 
utilizando um laço de repetição do tipo for, calcule a soma dos números de 1 a N. -->

<?php
$num = $_POST["num"] ?? 0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>FORMULÁRIO</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
    
<body>
	<header>
		<h1>SOMA DOS NÚMEROS</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="index.php" method="post">
				<label>Número a ser somado a partir de 1:
					<input type="number" id="number" name="num" value="<?=$num?>" required>
				</label>

				<button name="enviar">ENVIAR</button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<?php
                $metodo = $_SERVER["REQUEST_METHOD"];
				
				if($metodo == "POST"){
					$soma = 0;
					for($i = 1; $i <= $num; $i += 1){
							$soma = $soma + $i;	
						}
					echo "A soma de todos os números é {$soma}";
				}else{
					echo"<p>Aguardando Operação</p>";}
            ?>
		</div>
	</div>
</body>
</html>