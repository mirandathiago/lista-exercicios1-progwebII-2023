<?php
/*
8- O IMC (Índice de Massa Corporal) é uma medida que indica se a pessoa está dentro do peso ideal.
Crie um formulário que permita ao usuário informar o peso e a altura.
Com base nesses dados, calcule o IMC (Índice de Massa Corporal)
e exiba em qual faixa de peso a pessoa se encontra. Utilize as seguintes faixas: abaixo do peso
(IMC menor que 18,5), peso normal (IMC entre 18,5 e 24,9), sobrepeso (IMC entre 25 e 29,9)
obesidade grau 1 (IMC entre 30 e 34,9), obesidade grau 2 (IMC entre 35 e 39,9) e obesidade grau 3 IMC igual ou maior que 40).
O cálculo do IMC é realizado pela fórmula: IMC = peso / (altura^2), onde peso é a massa corporal em 
quilogramas e altura é a altura em metros elevada ao quadrado.
Utilize condicionais compostas com operadores lógicos para verificar em qual faixa de peso a pessoa se encontra.
Exemplo de entrada e saída:
Entrada: Peso: 70 kg, Altura: 1.70 m
Saída: Seu IMC é 24.22, você está na faixa de peso normal.
Entrada: Peso: 90 kg, Altura: 1.75 m
Saída: Seu IMC é 29.39, você está na faixa de sobrepeso.
*/
$altura = $_POST["altura"] ?? 1;
$peso = $_POST["peso"] ?? null;

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
        <h1>Ìndice de Massa Corporal :</h1>
    </header>
    <div class="container">
        <div class="box Lista">
            <h2>Informe: </h2>
            <form action="index.php" method="post">
                <label>Peso (kg):
                    <input type="number" id="number" name="peso" min="0" value="<?= $peso ?>" required>
                </label>
                <label>Altura (M):
                    <input type="number" id="number" name="altura" min="0" step="0.01" value="<?= $altura ?>" required>
                </label>
                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resposta</h2>
            <?php
            $imc = $peso / ($altura * $altura);
            $meta = round($imc, 2);
            $metodo = $_SERVER["REQUEST_METHOD"];
            if ($metodo == "POST") {
                if ($imc < 18.5) {
                    echo "Seu IMC é $meta, e você está abaixo do peso.<br>";
                } else if ($imc >= 18.5 && $imc <= 24.9) {
                    echo "Seu IMC é $meta,e você está com o peso normal.<br>";
                } else if ($imc >= 25 && $imc <= 29.9) {
                    echo "Seu IMC é $meta,e você está com sobrepeso.<br>";
                } else if ($imc >= 30 && $imc <= 34.9) {
                    echo "Seu IMC é $meta,e você está com obesidade grau 1.<br>";
                } else if ($imc >= 35 && $imc <= 39.9) {
                    echo "Seu IMC é $meta,e você está com obesidade grau 2.<br>";
                } else {
                    echo "Seu IMC é $meta,e você está com obesidade grau 3.<br>";
                }
            } else {
                echo "<p>Aguardando</p>";
            }
            ?>
        </div>
    </div>
</body>

</html>