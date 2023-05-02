<?php
	$metodo = $_SERVER["REQUEST_METHOD"];
	$num1 = $_POST["num1"] ?? "";
	$escolha = $_POST["escolha"] ?? "";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
    <header>
        <h1>Questão 15 - PAR OU ÍMPAR </h1>
    </header>
    <div class="container">
	<div class="box formulario">
    <h2>Jogue com o computador: </h2>
		<form action="index.php" method="POST">
			<label>Escolha um número entre 1 e 10:
				<input type="number" name="num1" min="0" max="10" required value="<?=$num1?>">
			</label>
			<label>Escolha Par ou Ímpar:
				<select name="escolha" required>
					<option value="">Escolha...</option>
					<option value="par" <?= $escolha == "par" ? "selected" : "" ?> >Par</option>
					<option value="impar" <?= $escolha == "impar" ? "selected" : "" ?> >Ímpar</option>
				</select>
			</label>
			<button type="submit"> Jogar </button>
		</form>
	</div>
		
	
		<div class="box resposta">
			<h2> Resultado:</h2>
			<?php 
					if($metodo == "POST"){
						$num2 = rand(0,10);
						$soma = $num1 + $num2;
						if($soma % 2 == 0){
							$resultado = "par";
							if($resultado == $escolha){
								$mensagem = "Você: Par --- {$num1} <br>
											 Computador: Ímpar --- {$num2}<br>
											Soma: {$num1} + {$num2} = {$soma}<br>{$soma} é par !!!<br>
											<h3> VOCÊ VENCEU!!!</h3> ";
							}else{
								$mensagem = "Você: Ímpar ---{$num1} <br>
											Computador: Par ---{$num2}<br>
											Soma: {$num1} + {$num2} = {$soma}<br>{$soma} é par !!!<br>
											<h3>O COMPUTADOR VENCEU!!!</h3> ";

							}
						}else{
							$resultado = "impar";
							if($resultado == $escolha){
								$mensagem = "Você: Ímpar --- {$num1} <br>
											 Computador: Par --- {$num2}<br>
											Soma: {$num1} + {$num2} = {$soma}<br>{$soma} é ímpar !!!<br>
											<h3> VOCÊ VENCEU!!!</h3> ";
							}else{
								$mensagem = "Você: Par --- {$num1} <br>
											 Computador: Ímpar --- {$num2}<br>
											Soma: {$num1} + {$num2} = {$soma}<br>{$soma} é ímpar !!!<br>
											<h3>O COMPUTADOR VENCEU!!!</h3> ";

						}
						}
						echo"{$mensagem}";
					}
            ?>

		</div>
	</div>
</body>
</html>
