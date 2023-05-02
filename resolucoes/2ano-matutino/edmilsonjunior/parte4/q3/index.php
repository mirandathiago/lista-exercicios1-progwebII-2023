<!DOCTYPE html>
<html>
<head>
	<title>QUESTÃO 3/ PARTE 4 </title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Escolha os sabores de pizza:</h1><div class="container">
		<div class="box formulario">
	<form method="post" action="index.php">
		<label><input type="checkbox" name="sabores[]" value="Calabresa">Calabresa</label>
		<label><input type="checkbox" name="sabores[]" value="carne seca"> carne seca</label>
		<label><input type="checkbox" name="sabores[]" value="Quatro Queijos">Quatro Queijos</label>
		<label><input type="checkbox" name="sabores[]" value="Portuguesa">Portuguesa</label>
		<label><input type="checkbox" name="sabores[]" value="Frango com Catupiry">Frango com Catupiry</label>
		<input type="submit" value="Enviar" id="submit-btn">
            </form></div></div>
	<br>
    <?php
		if(isset($_POST['sabores'])){
			$sabores = $_POST['sabores'];
			foreach ($sabores as $sabor) {
				echo "<p class='alerta-verde'>$sabor</p>";
			}
		} else {
			echo "<p class='alerta-vermelho'>Nenhum sabor foi selecionado.</p>";
		}
	?>
	
</body>
</html>
