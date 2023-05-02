\\Questão 8
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
        <h1>Estruturas de repetição</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Indice da massa corporal</h2>
            <form action="formulario.php" method="post">
            <label>Digite seu nome:
                    <input type="text" name="Nome">
            </label>
              <label> Digite o seu peso em kg:
                    <input type="number" name="Peso">
              </label>
              <label>Digite sua altura :
                    <input type="number" name="Altura" step="0.01">
              </label>
             
                <button name="enviar"> Calcular</button>
            </form>
        </div>
       
        <div class="box resposta">
            <h2>IMC</h2>
            <?php
            $nome = $_POST["Nome"]?? "";
            $altura =$_POST["Altura"]?? 0;
            $peso =$_POST["Peso"]?? 0;
            $imc = $peso / ($altura**2);
           
            if($imc < 18.5){
                echo "<p class='alerta-azul'>{$nome} seu IMC é {$imc}, você está na faixa abaixo do peso</p>";
            }else if($imc >= 18.5 && $imc <= 24.9){
                echo "<p class='alerta-verde'>{$nome} seu IMC é {$imc},você está na faixa peso normal</p>";
            }elseif($imc>=25 && $imc <=29.9){
                echo "<p class='alerta-amarelo'>{$nome} seu IMC é {$imc}você está na faixa sobrepeso</p>";
            }elseif($imc>=30 && $imc <=34.9){
                echo "<p class='alerta-laraja'>{$nome} seu IMC é {$imc}você está na faixa obesidade grau 1</p>";
            }elseif($imc>=35 && $imc <=39.9){
                echo "<p class='alerta-vermelho'>{$nome} seu IMC é {$imc}você está na faixa obesidade grau 2</p>";
            }elseif($imc > 40){
                echo "<p class='alerta-vermelho'>{$nome} seu IMC é {$imc}você está na faixa obesidade grau 3</p>";
            }
            ?>
            <br>


            <a href="formulario.php" class="link">Voltar</a>
        </div>
    </div>
</body>
</html>
