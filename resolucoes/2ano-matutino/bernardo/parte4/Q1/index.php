<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<title>Formulário</title>
	 <!-- 1- Escreva um formulário que tenha um campo do tipo checkbox que permita que sejam marcadas as frutas favoritas de um usuário. (Devem existir ao menos 5 frutas para serem escolhidas). Em seguida processe a informação deste formulário utilizando o comando For Each para apresentar as frutas que foram escolhidas.
 --->
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="resposta.php" method="post">
				<fieldset>
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
				  <input type="checkbox" id="banana" name="fruta1" value="banana">
				  <label>Banana</label>
				</div>
				<div>
				  <input type="checkbox" id="morango" name="fruta2" value="morango">
				  <label>Morango</label>
				</div>
				<div>
				  <input type="checkbox" id="uva" name="fruta3" value="uva">
				  <label>Uva</label>
				</div>
				<div>
				  <input type="checkbox" id="abacaxi" name="fruta4" value="abacaxi">
				  <label>Abacaxi</label>
				</div>
				<div>
				  <input type="checkbox" id="laranja" name="fruta5" value="laranja">
				  <label>Laranja</label>
				</div>
				<div>
				  <input type="checkbox" id="melancia" name="fruta6" value="melancia">
				  <label>Melancia</label>
				</div>
				<div>
				  <input type="checkbox" id="mamao" name="fruta7" value="mamao">
				  <label>Mamão</label>
				</div>
			  </fieldset>
	
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>