
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
		<h1>Frutas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="post">
				
			   <fieldset>
				<h3>Selecione suas frutas favoritas:</h3>
				<div>
				  <input type="checkbox" id="banana" name="frutas[]" value="banana">
				  <label for="banana">Banana</label>
				</div>
				<div>
				  <input type="checkbox" id="morango" name="frutas[]" value="morango">
				  <label for="morango">Morango</label>
				</div>
				<div>
				  <input type="checkbox" id="uva" name="frutas[]" value="uva">
				  <label for="uva">Uva</label>
				</div>
				<div>
				  <input type="checkbox" id="abacaxi" name="frutas[]" value="abacaxi">
				  <label for="abacaxi">Abacaxi</label>
				</div>
				<div>
				  <input type="checkbox" id="laranja" name="frutas[]" value="laranja">
				  <label for="laranja">Laranja</label>
				</div>
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
		<h2>Resultado</h2>
		<?php
		/*Escreva um formulário que tenha um campo do tipo checkbox que permita que sejam 
		marcadas as frutas favoritas de um usuário. 
		(Devem existir ao menos 5 frutas para serem escolhidas). 
		Em seguida processe a informação deste formulário utilizando o comando 
		For Each para apresentar as frutas que foram escolhidas.*/
			$metodo = $_SERVER["REQUEST_METHOD"];
			
			echo '<h3>As frutas selecionadas foram:</h3>';
if($metodo == "POST"){
    // Acessando o array $_POST para recuperar os valores dos checkboxes selecionados
    $fruta = $_POST["frutas"];
    // Laço foreach para exibir cada uma das frutas selecionadas
    foreach($fruta as $frutas){
        echo $frutas;
        echo "<br>";
    }
} else {
    echo "<p>Aguardando Operação</p>";
}
            ?>
		</div>
	</div>
</body>
</html>