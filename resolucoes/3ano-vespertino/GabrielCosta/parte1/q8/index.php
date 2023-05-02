<?php
$preco = $_POST["preco"] ?? 0;
$parcela = $_POST["parcela"] ?? 0;
$preju = $preco * $parcela * 0.04;
$total = $preco + $preju;


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
		<h1>CELULAR</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="q_stao8.php" method="post">
				
				<label>Valor:
					<input type="number" name="preco" value="<?=$preco?>" required>
				</label>
                <label>Parcela:
					<input type="number" name="parcela" value="<?=$parcela?>" required>
				</label>
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
           <?php 
           if($parcela == 0){
            echo "<div class='item'>Preço à vista: R$ {$preco}";
           } else{
           echo "<div class='item'>Preço com juros: R$ {$total}";
           }
           ?>
		  
		</div>
	</div>
</body>
</html>