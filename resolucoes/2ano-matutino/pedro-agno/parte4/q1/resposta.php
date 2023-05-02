<?php
/*1- Escreva um formulário que tenha um campo do tipo checkbox que permita que sejam marcadas as frutas
 favoritas de um usuário. (Devem existir ao menos 5 frutas para serem escolhidas). Em seguida processe 
 a informação deste formulário utilizando o comando For Each para apresentar as frutas que foram 
 escolhidas.  */
$frutas = $_GET["frutas"] ?? [];

var_dump($frutas);



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
			<h2>
	
<?php 
	foreach($frutas as $fruta){
   echo "<h3> a fruta escolhida foi:{$fruta}</h3>";
}
?>	
</h2>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>