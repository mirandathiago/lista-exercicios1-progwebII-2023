<?php
/*Crie um formulário que solicite o nome de uma pessoa e ao ser enviado faça uma saudação a esta pessoa dando bom dia, 
boa tarde ou boa noite de acordo com o horário do dia em que o programa está sendo executado.
Para saber a hora do dia você poderá utilizar a função date do PHP passando como parâmetro a string “H” que retorna a hora atual 
no formato 24 horas. 
de 05 até 12h deve ser dado Bom dia
de 13h até 18h deve ser dado Boa Tarde
de 18h até 23h deve ser dado Boa Noite
de 00h até 04h deve ser exibida a mensagem: Vá Dormir, está de Madrugada.
Entrada: João
Saída: Bom dia, João!
*/
    $nome = $_GET["nome"] ?? "Pessoa";
 date_default_timezone_set("America/Bahia");//função para pegar o horário da região, não do servidor
 $hora = date("H"); //função date recupera a data da região
 //echo $hora;
 $saudacao = ""; 
            if($hora >= 05 && $hora <= 12){ //só vai dar bom dia se a hora for entre 5 E 12
                $saudacao =  "Bom dia";
            }elseif($hora >= 13 && $hora <= 18){ //só vai dar boa tarde se a hora for entre 13 E 18
                $saudacao = "Boa tarde";
            }elseif($hora > 18 && $hora <= 23){ //só vai dar boa noite se a hora for entre 18 E 23
                $saudacao =  "Boa noite";
            }elseif($hora >= 00 && $hora <= 04){ //só vai reclamar se a hora for entre 00 E 04
                $saudacao = "Vá dormir, está de madrugada";
            }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Saudações</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Horário</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Saudações!</h2>
			<form action = "index.php" method = "get">				
				<label>Informe seu nome:
					<input type="text" name="nome" required>
				</label>	
				<button name = "botao"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
            <?php
            echo "<p>{$saudacao}, {$nome}!</p>";
            ?>
					
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
