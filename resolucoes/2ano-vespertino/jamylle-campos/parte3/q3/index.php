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
        <h1>Contando números pares</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Insira:</h2>
            <form action="index.php" method="post">
                <label>Inicio do intervalo:
					<input type="number" id="inicio" name="inicio" required>
				</label>
                <label>Fim do intervalo:
					<input type="number" id="fim" name="fim" required>
				</label>
                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resposta</h2>
			<?php

                $inicio = $_POST["inicio"]??0;
                $fim = $_POST["fim"]??0;

                $x = 0;
                for ($i = $inicio; $i <= $fim; $i++) {
                    if ($i % 2 == 0) {
                        $x++;
                    }
                 }

                echo "<p>Quantidade de números pares: {$x}</p>";
			?>
        </div>
    </div>
</body>

</html>