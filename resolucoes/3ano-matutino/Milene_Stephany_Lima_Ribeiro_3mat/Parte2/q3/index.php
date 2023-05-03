<?php 
/*
3- Crie um formulário que solicite o nome de uma pessoa e ao ser enviado faça uma saudação a esta pessoa dando bom dia,
boa tarde ou boa noite de acordo com o horário do dia em que o programa está sendo executado.
Para saber a hora do dia você poderá utilizar a função date do PHP passando como parâmetro a string “H” que retorna a hora atual no formato 24 horas. 
de 05 até 12h deve ser dado Bom dia
de 13h até 18h deve ser dado Boa Tarde
de 18h até 23h deve ser dado Boa Noite
de 00h até 04h deve ser exibida a mensagem: Vá Dormir, está de Madrugada.
Entrada: João
Saída: Bom dia, João!
*/


                   $nome = $_POST["nome"] ?? "";
               date_default_timezone_set('America/Bahia');
                   $horario = date('H:i:s', time());
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lista</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
<header>
    <h1>Olá</h1>
</header>
<div class="container">
    <div class="box Lista">
       
        <form action="index.php" method="post">
            <label><h3>Seu nome:</h3>
                <input type="text" id="nome" name="nome" required>
            </label>
            <button name="enviar"> Enviar </button>
        </form>
    </div>
    <div class="box resposta">
        <h2>Olá</h2>
        <?php
        $metodo = $_SERVER["REQUEST_METHOD"];
        if($metodo == "POST"){


            if($horario >= '05:00:00' && $horario <= '12:59:59'){
                echo "Bom Dia, $nome!<br>Agora exatamente $horario";  
            }else if($horario >= '13:00:00' && $horario <= '18:00:00'){
                echo "Boa Tarde, $nome!<br>Agora são $horario";
            }else if ($horario >= '18:00:00' && $horario <= '23:59:59'){
                echo "Boa Noite, $nome!<br> são $horario aonde você está";
            }else {
                echo "Olá, $nome!<br>Agora já são $horario da madrugada!";}
        }else{
            echo "<p>Aguardando </p>";}
        ?>
    </div>
</div>
</body>
</html>

?>