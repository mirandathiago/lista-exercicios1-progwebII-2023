<?php
/*3- João deseja saber quantos números pares existem em um intervalo. Crie um formulário que permita ao usuário informar os dois números 
que delimitam o intervalo e, utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.
Exemplo de entrada:
Início do intervalo: 3
Fim do intervalo: 15
Exemplo de saída:
Quantidade de números pares: 6
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Números pares</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Quantidade de números pares</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe dois números: </h2>
			<form action = "index.php" method = "get">				
				<label>Informe um número:
					<input type="number" name="n1" required value = "<?=$n1?>">
				</label>
				<label>Informe outro número:
					<input type="number" name="n2" required value = "<?=$n2?>">
				</label>		
				<button name = "botao"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
            <?php 
            $n1 = $_GET["n1"] ?? 0; //recupera o primeiro numero
            $n2 = $_GET["n2"] ?? 0; //recupera o segundo numero
            $par = 0; //variável de controle de números pares
            for($i = $n1; $i <= $n2; $i++){ //começa a rodar do primeiro numero informar, para no segundo e percorre todos os numeros
                if($i % 2 == 0){ //se o resto da divisão do numero percorrido por 2 for igual a zero, ele é par
                    $par++; //adiciona um à variável par
                }//loop continua até que o contador seja igual ao segundo numero
            }
            echo "<p>Existem {$par} números pares no intervalo entre {$n1} e {$n2}!</p>"
            ?>
					
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
