<?php
	
	$metodo = ($_SERVER["REQUEST_METHOD"]);
    $preco = $_POST["preco"] ?? 0 ;
    $parcela = $_POST["parcela"] ?? 0;
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
		<h1>Questão 8 - Compra do celular</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Descubra quanto Maria deverá pagar: </h2>
			<form action="index.php" method="post">
				<label>Valor do celular:
					<input type="number" name="preco"  required value="<?=$preco?>">
				</label>
				<label>Parcelas:
					<input type="number" name="parcela"  required value="<?=$parcela?>">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	
     <div class="box resposta">
			<h2>Valor total à pagar:</h2>
			<?php
                /*J = c * i * n
              	  M = j + c */
                if($metodo == "POST"){
                $juros = $preco * 0.04 * $parcela;
                $total = $preco + $juros;
                    echo "<div class='alerta-verde'> 
					Preco à vista: 
					<br> 
					Total: {$preco} reais
					<br>
					<br>
					Parcelado em {$parcela} vezes:
					<br>
					Total: {$total} reais</div>";
                }

			?>
		</div>
</div>
</body>
</html>