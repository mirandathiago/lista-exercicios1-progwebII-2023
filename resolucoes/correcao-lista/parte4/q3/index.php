<?php

	$sabores = $_POST["sabores"] ?? [];


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
		<h1>Questão 3 - Parte 4</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2> Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza. Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes. Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach. Certifique-se de que a lista seja clara e fácil de ler, para que o cliente possa verificar suas escolhas antes de fazer o pedido.

</h2>
			<form action="index.php" method="post">
				

			   <fieldset>
				<legend>Selecione o sabor de Pizza favorita:</legend>
				<div>
				  <input type="checkbox" id="portuguesa" name="sabores[]" value="portuguesa" <?=in_array("portuguesa",$sabores) ? "CHECKED": ""?>>
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="mussarela" name="sabores[]" value="mussarela" <?=in_array("mussarela",$sabores) ? "CHECKED": ""?>>
				  <label for="mussarela">Mussarela</label>
				</div>
				<div>
				  <input type="checkbox" id="calabresa" name="sabores[]" value="calabresa" <?=in_array("calabresa",$sabores) ? "CHECKED": ""?>>
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="atum" name="sabores[]" value="atum" <?=in_array("atum",$sabores) ? "CHECKED": ""?>>
				  <label for="atum">Atum</label>
				</div>
				
				
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

			if($_SERVER["REQUEST_METHOD"] == "POST"){
				
				if( count($sabores) ){
					$quantidade = count($sabores);
					echo "<h3>Foram Selecionados {$quantidade} de sabor(es)</h3> ";

					foreach($sabores as $indice => $sabor){
						$numerosabor = $indice + 1;
						echo "<li> {$numerosabor}. {$sabor} </li>";
					}


				}else{
					echo "<p class='alerta-vermelho'>Selecione ao menos 1 sabor</p>";
				}

			}
			?>
			
		</div>
	</div>
</body>
</html>