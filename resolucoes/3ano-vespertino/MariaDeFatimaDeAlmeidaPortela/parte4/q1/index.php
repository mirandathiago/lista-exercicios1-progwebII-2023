<?php
	$frutinhas = $_GET['frutinhas'] ?? " ";
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
		<h1>Piramide machine</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Frutinhas</h2>
			<form action="index.php" method="get">
			   <fieldset>
				<legend>Escolha frutas:</legend>
				<input type="checkbox" name="frutinhas[]" value="Banana"/> Banana<br/>
    			<input type="checkbox" name="frutinhas[]" value="Morango"/> Morango<br/>
    			<input type="checkbox" name="frutinhas[]" value="Uva "/> Uva<br/>
				<input type="checkbox" name="frutinhas[]" value="Abacaxi "/> Abacaxi<br/>
				<input type="checkbox" name="frutinhas[]" value="Laranja "/> Laranja<br/>
			  </fieldset>ar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				for($i=0; $i < count($frutinhas); $i++){
					echo "Selecionada a fruta " . $frutinhas[$i] . "<br/>";
				}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>