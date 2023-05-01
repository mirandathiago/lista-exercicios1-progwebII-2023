<?php
 	 
	 $metodo = $_SERVER["REQUEST_METHOD"];
	 $numDigitado = $_POST["numDigitado"] ?? "";
	 $op = $_POST["op"] ?? "";
	 $mensagem = "";
	 

	 if($metodo == "POST"){

	 $numSorteado = rand(0, 10);
	 $soma = $numDigitado + $numSorteado;
	 $resto = $soma % 2; 
 
	 if($resto == 0){
		 switch ($op){
			 case "par":
				 $mensagem = "O número que você digitou foi $numDigitado e sua escolha foi $op, o número sorteado foi $numSorteado e a soma desses números é $soma, portanto você ganhou";
				 break;
			 case "impar":
				 $mensagem = "O número que você digitou foi $numDigitado e sua escolha foi $op, o número sorteado foi $numSorteado e a soma desses números é $soma, portanto você perdeu";
				 break;
		 }
	 }else{
		switch ($op){
		 case "par":
			 $mensagem = "O número que você digitou foi $numDigitado e sua escolha foi $op, o número sorteado foi $numSorteado e a soma desses números é $soma, portanto você perdeu";			
			 break;
		 case "impar":
			 $mensagem = "O número que você digitou foi $numDigitado e sua escolha foi $op, o número sorteado foi $numSorteado e a soma desses números é $soma, portanto você ganhou";
			 break;
		 }
	}
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
		<h1>Formulário de Par ou Ímpar</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informações referentes à opção de jogo</h2>
			<form action="index.php" method="post">
				<label>Número:
					<input type="number" name="numDigitado" min="0" max="10" step="1" value="<?=$numDigitado?>" required>
				</label>
			
				<label>Opção de escolha:
				<select name="op">
						<option <?=$op == "" ? "SELECTED" : "" ?> value=""></option>
						<option <?=$op == "par" ? "SELECTED" : "" ?> value="par">Par</option>
						<option <?=$op == "impar" ? "SELECTED" : ""?> value="impar">Ímpar</option>
				</select>
				</label>
				
				<button name="enviar">Jogar</button>
			</form>
		</div>		
	</div>

	<?php if($metodo == "POST"){ ?>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-amarelo"><?=$mensagem?></p>
            <a href="index.php" class="link">Jogar Novamente</a>
		</div>
	</div>
	<?php } ?>
</body>
</html>