<?php

        $metodo = $_SERVER["REQUEST_METHOD"];
        $tempototal = $_POST['tempototal'] ?? "";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
<header>
    <h1>Questão 26 -  No tempo certo...</h1>
</header>
<div class="container">
    <div class="box formulario">
        <h2>Tempo de duração da produção:</h2>
        <form action="index.php" method="post">
            <label>Tempo de produção(em segundos):
                <input type="number" name="tempototal" min="0" required value="<?=$tempototal?>" >
            </label>

            <button name="enviar">Ver tempo</button>
        </form>
    </div>

    <div class="box resposta">
        <h2>Resultado:</h2>
        <?php 
                if ($metodo == "POST") {
                    $horas = 0;
                    $minutos = 0;
                    $segundos = 0;
                    //Loop enquanto o tempo é diferente de zero
                    while ($tempototal > 0) {
                        //Verificando as condições do tempo
                        if ($tempototal >= 3600) {
                            $tempototal = $tempototal - 3600;
                            $horas++;
                        }
                        else if ($tempototal >= 60 && $tempototal < 3600) {
                            $tempototal = $tempototal - 60;
                            $minutos++;
                        }
                        else if ($tempototal < 60) {
                            $segundos = $tempototal;
                            $tempototal = 0;
                        }else{
                            echo" OPÇÃO INVÁLIDA! TENTE NOVAMENTE!";
                        }
                    }
                    // Modificando o formato da hora: h/m/s (Obs: Tem uma função pra isso,eu sei, mas quis fazer do jeito bruto pq nois sabekkk)
                    if($horas < 10){
                        $horas = "0{$horas}";
                    }if($minutos < 10 ){
                        $minutos = "0{$minutos}";
                    }if($segundos < 10){
                        $segundos = "0{$segundos}";
                    }
                    echo "O tempo de duração do evento no formato [horas:minutos:segundos] <br>{$horas}:{$minutos}:{$segundos}";
                }


        ?>
    </div>
</div>
</body>
</html>
