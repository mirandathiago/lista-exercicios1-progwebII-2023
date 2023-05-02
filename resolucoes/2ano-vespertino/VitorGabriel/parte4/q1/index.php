<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body><h1>Frutas...</h1>
	</header>
    <div class="container">
		<div class="box formulario">
        <form method="POST">
  <label for="frutas"><h3>Escolha suas frutas favoritas:</h3></label><br>
  <input type="checkbox" id="banana" name="frutas[]" value="Banana">
  <label for="banana">Banana</label><br>
  <input type="checkbox" id="maca" name="frutas[]" value="Maçã">
  <label for="maca">Maçã</label><br>
  <input type="checkbox" id="laranja" name="frutas[]" value="Laranja">
  <label for="laranja">Laranja</label><br>
  <input type="checkbox" id="uva" name="frutas[]" value="Uva">
  <label for="uva">Uva</label><br>
  <input type="checkbox" id="abacaxi" name="frutas[]" value="Abacaxi">
  <label for="abacaxi">Abacaxi</label><br>
  <button name="enviar"> Enviar </button>
	</form>
</div>
    <div class="box resposta">
	<?php
if(isset($_POST['frutas'])){
  $frutas = $_POST['frutas'];
  echo "<h3>Frutas selecionadas: </h3><br>";
  foreach($frutas as $fruta){
    echo "<h3>$fruta</h3><br>";
  }
}
?>
     </div>
    </div>
</body>
</html>