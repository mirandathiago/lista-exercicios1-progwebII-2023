<!-- Maria está planejando sair de casa, mas ela quer escolher um local adequado de acordo com o clima do dia. Para isso, ele precisa da sua ajuda para criar um formulário que permita selecionar uma das seguintes opções de clima: ensolarado, ameno, chuvoso, nublado, tempestuoso. Em seguida, utilizando a estrutura de controle switch, você deve indicar qual local é mais apropriado para cada opção de clima escolhida por João. Considere as seguintes opções de locais: 

Ensolarado: Clube 
Ameno: Parque
Chuvoso: Cinema
Nublado: Museu
Tempestuoso: Ficar em casa
O formulário deve permitir a seleção de uma das opções de clima através de um campo select, e o resultado deve indicar qual o local mais apropriado para sair de acordo com o clima selecionado.
Entrada: Ensolarado
Saída: Com o clima ensolarado, recomendamos ir ao Clube.-->
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Dicas Para Rolê Segundo o Clima!</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Diga qual o clima de hoje e eu lhe darei a melhor opção para você sair! </h2>
			<form action="receber1.php" method="get">
			<p>Clima:</p>
			<select name="clima" id="clima">
            <option value="ensolarado">Ensolarado</option>
            <option value="ameno">Ameno</option>
            <option value="nublado">Nublado</option>
            <option value="chuvoso">Chuvoso</option>
            <option value="tempestuoso">Tempestuoso</option>
                 
            </select>
			
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>