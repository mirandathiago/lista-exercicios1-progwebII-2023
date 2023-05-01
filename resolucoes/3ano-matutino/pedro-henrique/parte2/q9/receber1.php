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
	    <div class="box resposta">
			<h2>Resultado</h2>
            <?php
            $clima=$_GET["clima"];

            switch ($clima) {
                case 'ensolarado':
                    echo "O clima ensolarado é propício para ir ao clube !!<br></br>";
                    break;
                case 'ameno':
                    echo "O clima ameno é propício para ir ao parque !!!<br></br>";
                    break;
                case 'nublado':
                    echo "O clima nublado é propício para ir ao Museu !!!<br></br>";
                    break;
                case 'chuvoso':
                    echo "O clima chuvoso é propício para ir ao Cinema !!!<br></br>";
                    break;
                case 'tempestuoso':
                    echo "O clima tempestuoso é propício para ficar em casa !!!<br>";
                    break;
            }
        
            ?>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>