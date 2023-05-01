<?php
    $num = $_POST['num'] ?? 0;
    $escolha = $_POST['escolha'] ?? 0;
    $num_aleatorio = rand(1, 10);
    $soma = $num + $num_aleatorio;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<h1>Jogo de Par ou Ímpar</h1>

<form action="questao5.php" method="post">
    <label>Digite um número de 1 a 10:</label>
    <input type="number" name="num" required min="1" max="10">

    <label>Escolha par ou ímpar:</label>
    <input type="radio" name="escolha" value="par" required> Par
    <input type="radio" name="escolha" value="impar" required> Ímpar

    <button name="jogar">Jogar</button>
</form>

<?php
    if (($soma % 2 == 0 && $escolha == 'par') || ($soma % 2 != 0 && $escolha == 'impar')) {
        echo "<p>Você escolheu {$num} e o computador escolheu {$num_aleatorio}. A soma é {$soma}. Você ganhou!</p>";
    } else {
        echo "<p>Você escolheu {$num} e o computador escolheu {$num_aleatorio}. A soma é {$soma}. Você perdeu!</p>";
    }

?>
</body>
</html>


