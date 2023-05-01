<!--1- crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.
Entrada: 2 5 1
Saída: Menor Número: 1 e o Maior Número: 5-->

<!DOCTYPE html>
<html>
<head>
	<title>FORMULÁRIO</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<form action="resposta.php" method="post">

            <h1>NÚMERO MAIOR E NÚMERO MENOR</h1>

    <!---O usuário coloca os números nesses campos-->
            <label>Número 1:
                <input type="number" name="num1">
            </label>
            <label>Número 2:
                <input type="number" name="num2">
            </label>
            <label>Número 3:
                <input type="number" name="num3">
            </label>

           
            <button>MOSTRAR</button>
		</form>
	</div>
</body>
</html>