<?php
	$num = $_POST["num"] ?? 0;
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
		<h1>Soma dos Números</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="post">
				<label>Quantidade de números para serem somados:
					<input type="number" id="number" name="num" value="<?=$num?>" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<?php
                $metodo = $_SERVER["REQUEST_METHOD"];
				
				if($metodo == "POST"){
					$soma = 0;
					for($i = 1; $i <= $num; $i += 1){
							$soma = $soma + $i;	
						}
					echo "A soma de todos os números é {$soma}<br>";
				}else{
					echo"<p>Aguardando Operação</p>";}
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>