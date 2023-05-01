<?php
$inicial = $_GET["inicial"] ?? 0;
$final = $_GET["final"] ?? 0;
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
		<h1>Números Pares</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="get">
				<label>Número inicial:
					<input type="number" id="number" name="inicial" value="<?=$inicial?>" required>
				</label>

				<label>Número final:
					<input type="number" id="number" name="final" value="<?=$final?>" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
                $metodo = $_SERVER["REQUEST_METHOD"];
				
				if($metodo == "GET" && isset($_GET["enviar"])){
					
						$soma = 0;
						for($i = $inicial; $i <= $final; $i ++){
							
							if($i % 2 == 0){
								$soma++;	
							}
						}
						echo "A quantidade de números pares é {$soma}<br>";
					}else{
					echo"<p>Aguardando Operação</p>";}
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>