<?php
$numero = $_POST["numero"] ?? 0;
$escolha = $_POST["escolha"] ?? "";
$computador = rand(0, 9);

$resultado= $numero + $computador;


if($escolha == 1 ){
    if($resultado%2 == 0){
    $resposta = "O usuário escolheu par e o número {$numero}. O computador sorteou o número {$computador}, e a soma deles é {$resultado}. É par e o usuario venceu.";
    }else{
    $resposta = "O usuário escolheu par e o número {$numero}. O computador sorteou o número {$computador}, e a soma deles é {$resultado}. É impar e o Computador venceu.";
}
}if($escolha == 2 ){
    if($resultado%2 != 0){
        $resposta = "O usuário escolheu impar e o número {$numero}. O computador sorteou o número {$computador}, e a soma deles é {$resultado}. É impar e o usuario venceu.";
    }else{
        $resposta = "O usuário escolheu impar e o número {$numero}. O computador sorteou o número {$computador}, e a soma deles é {$resultado}. É par e o Computador venceu.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">


    <title>Jogo de ímpar ou par</title>
</head>
<body>
    <header>
        <h1>Jogo de ímpar ou par</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Ímpar ou Par</h2>
            <form action="index.php" method="post">
                
                <label>Escolha um número de 0 a 9:
                        <input type="number"  name="numero" min="0" max="9">
                </label>

                <fieldset>
                    <legend>Ímpar ou Par</legend>

                <label> Par:
                        <input type="radio" name="escolha" value="1">
                </label>
                <label> Ímpar:
                        <input type="radio" name="escolha" value="2">
                </label>

                </fieldset>
               

                <button name="jogar"> Jogar </button>


            </form>



            <div class="box resposta">
                <h2>Resposta</h2>
              <?php
              
              $metodo = $_SERVER["REQUEST_METHOD"];
					if($metodo == "POST"){
						echo "<p class='alerta-verde'>{$resposta}</p>";
					}else{
						echo "<p class='alerta-amarelo'> Aguardando os dados do formulário</p>";
					}	
              
              
              ?>


            </div>        
        </div>
    </div>





    
</body>
</html>