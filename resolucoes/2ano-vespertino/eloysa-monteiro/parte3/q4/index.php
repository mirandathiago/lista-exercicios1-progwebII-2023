<!-- Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N. Crie um formulário que permita ao usuário informar um número inteiro N e, utilizando um laço de repetição do tipo for, calcule a soma dos números de 1 a N.-->
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
		<h1>CONTAGEM</h1>
	</header>
	<div class="container">
		<div class="box formulario">
            <form action = "receber1.php" method = "POST">
            <label> Insira um número inteiro:
                <input type = "number" name = "valor">
            </label>
            <button> ENVIAR </button>
            </form>
			
		</div>
	</div>
</body>
</html>