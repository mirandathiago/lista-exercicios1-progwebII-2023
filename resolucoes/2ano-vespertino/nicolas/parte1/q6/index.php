
<?php
    /*6- João irá comprar uma terreno para construir sua casa e para isso gostaria de calcular a área total desse terreno, 
    crie um formulário que receba a largura e o comprimento do terreno, em seguida crie um código 
    PHP que irá calcular esta área e exibir na tela.
    Entrada: largura: 10m, comprimento: 20m
    Saída esperada: 200m2
    */

    $largura = $_POST["largura"] ?? 0; // a variavel recebe o valor utilizando o metodo post do formulario
    $comprimento = $_POST["comprimento"] ?? 0; // a variavel recebe o valor utilizando o metodo post do formulario
    $area = $largura * $comprimento; // formula da area armazenada em uma variavel

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
		<h1>Área do Terreno</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Digite os valores:</h2>
			<form action="index.php" method="post">

				<label>Largura do terreno(m):
					<input type="number" name="largura" required value="<?=$largura?>">
				</label>

				<label>Comprimento do terreno(m):
					<input type="number" name="comprimento" required value="<?=$comprimento?>">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
        <div class="box resposta">
			<h2>Resultado</h2>
			<?php

                $metodo = $_SERVER["REQUEST_METHOD"]; //  dados do servidopr e da requisição que está ocorrendo no momento.

                if($metodo == "POST"){ // verifica se o metodo é post e imrpime a mensagem na tela

                    echo "<p class='alerta-verde'>A área do terreno é de {$area}m<sup>2</sup></p>";

                }else{ // se não for post, é pq aguarda o envio do formulário

                    echo "<p class='alerta-amarelo'>AGUARDANDO O ENVIO DO FORMULÁRIO</p>";

                }

            ?>
		</div>		
	</div>
</body>
</html>
