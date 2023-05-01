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
        <h1>Somando números</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Insira:</h2>
            <form action="index.php" method="post">
                <label>Informe um número inteiro:
					<input type="number" id="num" name="num" required>
				</label>
                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resposta</h2>
			<?php
                $soma = 0;
                $num= $_POST['num']??0;
                for($i = 1; $i <= $num; $i++){
                    $soma += $i;
                }
                echo "Soma dos números de 1 a " . $num . ": " . $soma;
			?>
        </div>
    </div>
</body>

</html>