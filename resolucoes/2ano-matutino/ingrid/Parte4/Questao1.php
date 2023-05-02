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
		<h1>Frutas Preferidas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
<form method="post" action="Questao1.php">
  <label for="frutas">Selecione suas frutas favoritas:</label><br>
  <input type="checkbox" id="frutas" name="frutas[]" value="banana">
  <label for="frutas">Banana</label><br>
  <input type="checkbox" id="frutas" name="frutas[]" value="maça">
  <label for="frutas">Maçã</label><br>
  <input type="checkbox" id="frutas" name="frutas[]" value="laranja">
  <label for="frutas">Laranja</label><br>
  <input type="checkbox" id="frutas" name="frutas[]" value="uva">
  <label for="frutas">Uva</label><br>
  <input type="checkbox" id="frutas" name="frutas[]" value="manga">
  <label for="frutas">Manga</label><br>
  <br>
  <input type="submit" value="Enviar">
</form>
 

<?php
  if(isset($_POST['frutas'])){ /*A função isset() é utilizada para a checagem de determinada variável quando precisamos saber se ela está vazia ou já está configurada com algum valor */
    $frutas_selecionadas = $_POST['frutas'];
    
    echo "Frutas selecionadas:";
    foreach($frutas_selecionadas as $fruta){
      echo " <p>  {$fruta} </p>" ;
    }
  }
/* O código acima verifica se a variável $_POST['frutas'] foi definida e, em caso afirmativo, armazena as frutas selecionadas na variável $frutas_selecionadas. Em seguida, o comando foreach é utilizado para percorrer as frutas selecionadas e exibi-las na tela */
 /* Este formulário envia as frutas selecionadas para um arquivo php. Neste arquivo PHP, podemos utilizar o comando foreach para processar as frutas selecionadas e apresentá-las ao usuário */
 
/* A base de todos os programas foram dos documentos(php,html e css)usados em sala de aula */
?>


</body>
</html>