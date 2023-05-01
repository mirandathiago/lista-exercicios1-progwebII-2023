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
        <h1>Formulário de Porcentagem </h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Calcule seu desconto</h2>
			<form method="POST" action="resposta.php">
                <label>Valor inicial
                    <input type="number" id="inicial" name="inicial" required>
                </label>
                <label>Porcentagem do desconto
                    <input type="number" id="desconto" name="desconto" required>
                </label>
       
                <button name="enviar"> Enviar </button>
            </form>
        </div>
</body>
</html>

