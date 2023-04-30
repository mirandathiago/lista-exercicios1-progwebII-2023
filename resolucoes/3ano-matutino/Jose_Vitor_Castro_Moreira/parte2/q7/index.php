<?php
	$nome = $_POST["nome"] ?? "";
	$idade = $_POST["idade"] ?? 0;
	$altura = $_POST["altura"] ?? 0;
	$peso = $_POST["peso"] ?? 0;
	$sexo = $_POST["sexo"] ?? "M";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>Taxa de Metabolismo Basal</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="post">
				<label>Nome:
					<input type="text" id="nome" name="nome" value="<?=$nome?>" required>
				</label>

				<label>Idade:
					<input type="number" id="number" name="idade" min="0" value="<?=$idade?>" required>
				</label>

				<label>Altura (cm):
					<input type="number" id="number" name="altura" min="0" value="<?=$altura?>" required>
				</label>

				<label>Peso (kg):
					<input type="number" id="number" name="peso" min="0" value="<?=$peso?>" required>
				</label>

			   <fieldset>
				<p>Sexo:</p>
				<div>
				  <input type="checkbox" id="masculino" name="sexo" value="M">
				  <label for="masculino">Masculino</label>
				</div>
				<div>
				  <input type="checkbox" id="feminino" name="sexo" value="F">
				  <label for="feminino">Feminino</label>
				</div>
			  </fieldset>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "POST"){
				switch($sexo){
					case "M":
						$taxa = 88.36 + ((13.4 * $peso) + (4.8 * $altura) - (5.7 * $idade));
						echo "$nome, sua taxa de metabolismo é de aproximadamente $taxa calorias por dia. <br>";
						break;
					case "F":
						$taxa = 447.6 + (((9.2 * $peso) + (3.1 * $altura)) - (4.3 * $idade));
						echo "$nome, sua taxa de metabolismo é de aproximadamente $taxa calorias por dia. <br>";
						break;
					}}else{
				echo "<p>Aguardando Informação</p>";}
			?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>