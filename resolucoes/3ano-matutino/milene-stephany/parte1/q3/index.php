
<?php

/*
3- Um professor precisa calcular a média final de um aluno em uma disciplina, levando em conta as notas obtidas em três provas com pesos diferentes:
a primeira prova tem peso 2, a segunda prova tem peso 3 e a terceira prova tem peso 5. 
Crie um formulário que receba as notas do aluno em cada prova e calcule a média final.
Entrada: 
Nota da primeira prova: 7,0
Nota da segunda prova: 6,5
Nota da terceira prova: 8,0
Saída: Média final: 7,45
*/
 
 $prova1 = $_POST ["n1"] ?? 0;
 $prova2 = $_POST ["n2"] ?? 0;
 $prova3 = $_POST ["n3"] ?? 0;

 $media = (($prova1 * 2) + ($prova2 * 3) + ($prova3 * 5)) /10;

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
                       <h1>Calculadora de Média</h1>
    </header>
    <div class="container">
        <div class="box Lista">
                       <h2>Preencha com as notas:</h2>
        <form action="index.php" method="post">
                <label>Nota 1:
                    <input type="number" id="number" name="n1" step="0.01" required value="<?=$nota1?>">
                </label>
                <label>Nota 2:
                    <input type="number" id="number" name="n2" step="0.01" required value="<?=$nota2?>">
                </label>
                <label>Nota 3:
                    <input type="number" id="number" name="n3" step="0.01" required value="<?=$nota3?>">
                </label>
                <button name="enviar"> Enviar </button>
                </div>
        <div class="box resposta">
            <h2>Média Final:</h2>
            <?php
                $metodo = $_SERVER["REQUEST_METHOD"];
                if($metodo == "POST"){
                    if ($media >= 6){
                        echo "<p>A média obtida é: $media</p>";
                        ?><p class="Se passou"> VOCÊ ESTÁ APROVADO!</p><?php
                    }else{
                        echo "<p> A média obtida é: $media</p>";
                        ?><p class="Se perdeu"> VOCÊ FOI REPROVADO!</p><?php
                    }
                }else{
                    echo "<p>Preencha</p>";
                }
            ?>
            <a href="" class="link">Voltar</a>
        </div>
    </div>
</body>
</html>
