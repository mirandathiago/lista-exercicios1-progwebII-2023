<?php

	$metodo = $_SERVER["REQUEST_METHOD"];
	$ini = $_POST['ini'] ?? "";
	$fin = $_POST['fin'] ?? "";

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
		<h1>Questão 23 - Números Pares</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Veja os números pares de um intervalo:</h2>
			<form action="index.php" method="post">
				<label>Informe o número inicial:
					<input type="number" name="ini"  required value="<?=$ini?>" >
				</label>
				<label>Informe o número final:
					<input type="number" name="fin"  required value="<?=$fin?>" >
				</label>
				<button name="enviar">Descobrir</button>
			</form>
		</div>		
	
		<div class="box resposta">
			<h2>Resultado:</h2>
			<?php 
				if ($metodo == "POST") {
						$contador = 0;
						$msg = "";
						// Verifica se o intervalo é crescente,decrescente ou igual
						if ($ini > $fin) {
							for ($i = $ini; $i >= $fin; $i--) {
								if ($i % 2 == 0) {
									$contador++;
									if ($msg == "") {
										$msg = "ORDEM DECRESCENTE:<br><br>{$i}";
									} else {
										$msg = "{$msg} | {$i}";
									}
								}
							}
						} else if($ini < $fin){
							for ($i = $ini; $i <= $fin; $i++) {
								if ($i % 2 == 0) {
									$contador++;
									if ($msg == "") {
										$msg = "ORDEM CRESCENTE:<br><br>{$i}";
									} else {
										$msg = "{$msg} | {$i}";
									}
								}
							}
						}else{
							$contador++;
							$msg = "{$ini}";
						}
						echo "No intervalo de {$ini} até {$fin} tem {$contador} números pares.<br><br>{$msg}" ;
					}
			?>
		</div>
	</div>
</body>
</html>
