<?php
/*Para saber a hora do dia você poderá utilizar a função date do PHP passando como parâmetro a string “H” que retorna a hora atual no formato 24 horas. 
de 05 até 12h deve ser dado Bom dia
de 13h até 18h deve ser dado Boa Tarde
de 18h até 23h deve ser dado Boa Noite
de 00h até 04h deve ser exibida a mensagem: Vá Dormir, está de Madrugada.
*/
$nome = $_POST["nome"];
//Função para recuperar a hora atual
date_default_timezone_set('America/Bahia');
$horaatual = date('H');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário para saudação</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado:</h2>
			<?php
			// para obter os resultados ultilizeu a condicional if
				if ($horaatual >= 5 && $horaatual <=12) { //condicional para observar se a hora atual é maior que 5hr e menor que 12hr
					echo "Bom dia,{$nome}";
				}else if($horaatual >=13 && $horaatual <=18){ //condicional para observar se a hora atual é maior que 13hr e menor que 18hr
					echo "Boa tarde,{$nome}";
				}else if($horaatual > 18 && $horaatual <=23){ //condicional para observar se a hora atual é maior que 18hr e menor que 23hr
					echo "Boa noite,{$nome}";
				}else if($horaatual >= 0 && $horaatual <= 4){ //condicional para observar se a hora atual é maior que 00hr e menor que 4 da manha
					echo "Vá Dormir {$nome}, está de Madrugada";
				}
				
			?>
			<br>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>