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
        <h1>Asteriscos</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Informe</h2>
            <form action="index.php" method="post">
                <label>Quantidade de linhas
					<input type="number" id="linhas" name="linhas">
				</label>
                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resposta</h2>
			<?php
                $linhas = $_POST['linhas']??0;

                if($linhas > 0){
                    $desenho = "";
                    for($i = 1; $i <= $linhas; $i++){
                        for($j = 1; $j <= $i; $j++){
                            $desenho .= "* ";
                        }
                        $desenho .= "\n";
                    }
                    echo "<pre>" . $desenho . "</pre>";
                }
                else{
                    echo "<p>Número de linhas nulo</p>";
                }

			?>
        </div>
    </div>
</body>

</html>