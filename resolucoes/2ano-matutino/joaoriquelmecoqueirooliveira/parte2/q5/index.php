<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 5 Parte 2</title>
</head>
<body>
    <header>
	    <h1>Jogo de Par ou Ímpar</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escolha o número e se vai querer jogar par ou ímpar:</h2> <br>
			<form action="index.php" method="get">
                <label>
                    <legend>Número:</legend>
                    <select name="numero">
                        <option></option> 
                        <?php
                            for($i = 0; $i <= 10; $i++){
                                echo "<option>{$i}</option>";
                            }
                        ?>
                    </select>
                </label>

                <fieldset>
					<legend>Escolha:</legend>
				    <label>
					    <input type="radio" name="escolha" value="par">Par
				    </label>
				    <label>
					    <input type="radio" name="escolha" value="impar">Ímpar
				    </label>
				</fieldset>
                <button>Enviar</button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resposta</h2> <br>
			<?php
                $escolha = $_GET["escolha"] ?? "par";
                $numero = $_GET["numero"] ?? 0;
                $numeroComputador = rand(0,10);
                $soma = $numero + $numeroComputador;
                if($soma % 2 == 0){
                    if(strcmp($escolha,"par") == 0){
                        echo "<h2>Você ganhou!</h2>";
                        echo "<h2>Você escolheu {$numero} e o computador {$numeroComputador}, a soma deu {$soma} que é par</h2>";
                    }else if(strcmp($escolha,"impar") == 0){
                        echo "<h2>Você perdeu!</h2>";
                        echo "<h2>Você escolheu {$numero} e o computador {$numeroComputador}, a soma deu {$soma} que é par</h2>";
                    }
                }else{
                    if(strcmp($escolha,"impar") == 0){
                        echo "<h2>Você ganhou!</h2>";
                        echo "<h2>Você escolheu {$numero} e o computador {$numeroComputador}, a soma deu {$soma} que é impar</h2>";
                    }else if(strcmp($escolha,"par") == 0){
                        echo "<h2>Você perdeu!</h2>";
                        echo "<h2>Você escolheu {$numero} e o computador {$numeroComputador}, a soma deu {$soma} que é impar</h2>";
                    }
                }
			?>
		</div>
	</div>
</body>
</html>