<!--1- crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.
 -->
 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form action="receber1.php" method="POST">

        <label class="valores"> Insira um valor [0]:
            <input name="camp0" type="number">
        </label>

        <label class="valores"> Insira um valor [1]:
            <input type="number" name="camp1">
        </label>

        <label class="valores"> Insira um valor [2]:
            <input type="number" name="camp2">
        </label>
        <button> ENVIAR </button>
    </form>
</body>
</html>