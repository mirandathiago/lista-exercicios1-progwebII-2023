<?php

    /*2- Crie um formulário com um campo numérico e que ao ser enviado 
    irá mostrar o dobro e a metade deste número.

    Entrada: 4
    Saída: Dobro: 8 e Metade: 2*/

    $num = $_POST["num"] ?? 0;
    $dobro = $num * 2;
    $metade = $num / 2;
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
		<h1>Dobro e Metade</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Digite o número inteiro desejado:</h2>
			<form action="index.php" method="post">

				<label>Digite aqui:
					<input type="number" name="num" required value="<?=$num?>">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
        <div class="box resposta">
			<h2>Resultado</h2>
			<?php

                $metodo = $_SERVER["REQUEST_METHOD"]; //  dados do servidopr e da requisição que está ocorrendo no momento.

                if($metodo == "POST"){ // verifica se o metodo é post e imrpime a mensagem na tela

                    echo "<p class='alerta-verde'>O dobro de {$num} é: {$dobro}.<br>A metade de {$num} é: {$metade}.</p>";

                }else{ // se não for post, é pq aguarda o envio do formulário

                    echo "<p class='alerta-amarelo'>AGUARDANDO O ENVIO DO FORMULÁRIO</p>";

                }

            ?>
		</div>		
	</div>
</body>
</html>
