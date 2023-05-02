<?php
/*Um professor precisa calcular a média final de um aluno em uma disciplina, 
levando em conta as notas obtidas em três provas com pesos diferentes: 
a primeira prova tem peso 2, 
a segunda prova tem peso 3 
e a terceira prova tem peso 5. 
Crie um formulário que receba as notas do aluno em cada prova e calcule a média final.*/

	$nota1 = $_POST["n1"] ?? 0;
	$nota2 = $_POST["n2"] ?? 0; //Aqui recebe as informações das variáveis que o usuário preenche. Se estiver vazio recebe valor nulo, se não for preenchida.
	$nota3 = $_POST["n3"] ?? 0;

	$media = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5)) / 10;
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
		<h1>Calculadora de Média</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe as notas</h2>
			<form action="index.php" method="post">
				<label>Nota 1:
					<input type="number" id="number" name="n1" step="0.01" required value="<?=$nota1?>">
				</label>

				<label>Nota 2:
					<input type="number" id="number" name="n2" step="0.01" required value="<?=$nota2?>">
				</label>

				<label>Nota 3:
					<input type="number" id="number" name="n3" step="0.01" required value="<?=$nota3?>">
				</label>

				<button name="enviar"> Enviar </button>
				</div>
		<div class="box resposta">
			<h2>Média</h2>
			<?php

				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){ // é verificado que método é recebido pelo form 

					if ($media >= 6){
						echo "<p>Sua média é: $media</p>";
						?><p class="alerta-verde">APROVADO!</p><?php
					}else{
						echo "<p>Sua média é: $media</p>";
						?><p class="alerta-vermelho">REPROVADO!</p><?php
					}
				}else{
					echo "<p>Aguardando Informação</p>";
				}
			?>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>