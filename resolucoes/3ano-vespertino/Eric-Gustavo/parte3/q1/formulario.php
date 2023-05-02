\\Questão 1
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
            <h2>Fatorial</h2>
            <form action="formulario.php" method="post">
              <label> Informe um número:
                <input type="number" name="num">
              </label>
             
                <button name="enviar"> Calcular</button>
            </form>
        </div>
       
        <div class="box resposta">
            <h2>Resposta</h2>
            <?php
       
            $metodo = $_SERVER["REQUEST_METHOD"];
            if($metodo == "POST"){
                $n = $_POST["num"];
                if($n ==0){
                    echo "<p class ='alerta-amarelo'>O fatorial de O é 1";
                }else{
                $fatorial =1;
                for ($j = 1; $j <= $n ; $j++) {
                    $fatorial = $fatorial * $j;
                   
                }
                echo "<p>{$fatorial}</p>";
                }
        }else{
            echo "<p class='alerta-vermelho'>Informe um número</p>";
        }
