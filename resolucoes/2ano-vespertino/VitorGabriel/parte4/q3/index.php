<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body><h1>Pizzaria...</h1>
	</header>
    <div class="container">
		<div class="box formulario">
        <form method="post">
  <h3>Escolha os sabores de pizza:</h3>
  <label><input type="checkbox" name="sabores[]" value="Calabresa">Calabresa</label><br>
  <label><input type="checkbox" name="sabores[]" value="Mussarela">Mussarela</label><br>
  <label><input type="checkbox" name="sabores[]" value="Frango">Frango</label><br>
  <label><input type="checkbox" name="sabores[]" value="Portuguesa">Portuguesa</label><br>
  <label><input type="checkbox" name="sabores[]" value="Margherita">Margherita</label><br>
  <input type="submit" value="Enviar">
</form>
</div>
    <div class="box resposta">
	<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupera os sabores selecionados
  $sabores = $_POST["sabores"];

  // Exibe a lista de sabores selecionados
  echo "<h3>Você escolheu os seguintes sabores:</h3>";
  echo "<ul>";
  foreach ($sabores as $sabor) {
    echo "<li><h3>$sabor</h3></li>";
  }
  echo "</ul>";
}
?>
     </div>
    </div>
</body>
</html>