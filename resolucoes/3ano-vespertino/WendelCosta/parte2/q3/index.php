<?php 

/*
	3- Crie um formulário que solicite o nome de uma pessoa e ao ser enviado faça uma saudação a esta pessoa dando bom dia, boa tarde ou boa noite de acordo com o horário do dia em que o programa está sendo executado.
	Para saber a hora do dia você poderá utilizar a função date do PHP passando como parâmetro a string “H” que retorna a hora atual no formato 24 horas. 
	de 05 até 12h deve ser dado Bom dia
	de 13h até 18h deve ser dado Boa Tarde
	de 18h até 23h deve ser dado Boa Noite
	de 00h até 04h deve ser exibida a mensagem: Vá Dormir, está de Madrugada.
	Entrada: João
	Saída: Bom dia, João!
*/


    $nome = $_POST["nome"] ?? "";
	date_default_timezone_set('America/Sao_Paulo');
	$hora = date("H");
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Saudação</h2>
			<form action="index.php" method="post">
                <label>
                    Insira seu nome:
                        <input type="text" id="nome" name="nome" required >
                </label>



				<button name="enviar"> Enviar </button>

                <?php 
                
                    if($hora >= 05 && $hora <= 12){
                        $mensagem = "Bom dia, {$nome}";
                    } else if($hora > 13 && $hora <= 18){
                        $mensagem = "Boa tarde, {$nome}";
                    } else if($hora >= 18 && $hora <= 23){
                        $mensagem = "Boa noite, {$nome}";
                    } else if($hora >= 00 && $hora <= 04){
						$mensagem = "Vá dormir {$nome}, está de madrugada";
					}
                ?>
			</form>
		</div>
		<div class="box resposta">
			<h2>Saudação</h2>
			<h4><?=$mensagem?></h4>
		</div>
	</div>
</body>
</html>