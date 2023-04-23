<?php

/*3- Crie um formulário que solicite o nome de uma pessoa e ao ser enviado faça uma saudação a esta 
pessoa dando bom dia, boa tarde ou boa noite de acordo com o horário do dia em que o programa está sendo
executado.
Para saber a hora do dia você poderá utilizar a função date do PHP passando como parâmetro a string “H”
 que retorna a hora atual no formato 24 horas. 
de 05 até 12h deve ser dado Bom dia
de 13h até 18h deve ser dado Boa Tarde
de 18h até 23h deve ser dado Boa Noite
de 00h até 04h deve ser exibida a mensagem: Vá Dormir, está de Madrugada.
Entrada: João
Saída: Bom dia, João
****************************************************
$timestamp = strtotime('23/04/2023 12:04:00');

$data_formatada = date('d/m/Y H:i:s', $timestamp);
echo $data_formatada;

ou melhor 
date_default_timezone_set('America/Sao_Paulo');
$tempo = date("H:i");
*/
date_default_timezone_set('America/Sao_Paulo');
$apelido = $_POST["nome"];

$tempo = date("H:i");

if($tempo >= 05 && $tempo <= 12){
	$fala = "Bom dia $apelido 😎 !";
}else if($tempo >= 13 && $tempo < 18){
	$fala = "Boa tarde $apelido 😃";
}else if($tempo >= 18 && $tempo <= 23){
	$fala = "boa noite $apelido! bora dormir, to de olho👀";
}else{
	$fala = "vá dormir $apelido, tu não é coruja não🦉, ainda hoje tem labuta😫";
}

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
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-verde"><?php echo "$fala"?></p>
			<p class="alerta-amarelo"><?php echo "$tempo horas" ?></p>
            <a href="index.php" class="link">Voltar</a> 
		</div>
	</div>
</body>
</html>