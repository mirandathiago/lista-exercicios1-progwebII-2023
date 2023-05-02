

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <main>
        <div id="container">
            <h1>Questão 01</h1>
            <p></p>
        </div>

        <form action="index.php" method="post">
            <input type="number" name="numero1" placeholder="Insira o número" required value="<?=$numero1?>" step = "0.01"/>

            <input type="number" name="numero2" placeholder="Insira o número" required value="<?=$numero2?> "step = "0.01"/>

            <input type="number" name="numero3" placeholder="Insira o número" required value="<?=$numero3?>"step = "0.01"/>
            <button>Finish</button>
        </form>
        

        <div class="box">
            <h1>Os valores são:</h1>
            <?php
    /*
    Questão número 11 da lista, Parte 2.

    crie um formulário com três campos do tipo number e um botão, em seguida utilizando
    uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.

    Entrada: 2 5 1
    Saída: Menor Número: 1 e o Maior Número: 5
    */

$metodo = $_SERVER["REQUEST_METHOD"];

if ($metodo == "POST") {
    $numero1 = $_POST["numero1"] ?? 0;
    $numero2 = $_POST["numero2"] ?? 0;
    $numero3 = $_POST["numero3"] ?? 0;
    if ($numero1 > $numero2 && $numero1 > $numero3) {
        $msg = "$numero1 é o maior";
        $msg2 = ' ';
    } elseif ($numero2 > $numero3 && $numero2 > $numero1) {
        $msg = "$numero2 é o maior";
        $msg2 = ' ';
    } elseif ($numero3 > $numero1 && $numero3 > $numero2) {
        $msg = "$numero3 é o maior";
        $msg2 = ' ';
    } elseif ($numero1 == $numero2 && $numero2 == $numero3) {
        $msg = "Todos os campos são iguais";
        $msg2 = ' ';
    } elseif ($numero1 == $numero2) {
        $msg = "O primeiro e o segundo valor são iguais: {$numero1} = {$numero2}";
        $msg2 = ' ';
    } elseif ($numero1 == $numero3) {
        $msg = "O primeiro e o tercerio valor são iguais: {$numero1} = {$numero3}";
        $msg2 = ' ';
    } elseif ($numero2 == $numero3) {
        $msg = "O primeiro e o tercerio valor são iguais: {$numero2} = {$numero3}";
        $msg2 = ' ';
    }

    if ($numero1 < $numero2 && $numero1 < $numero3) {

        $msg2 = " $numero1 é o menor!";
    } else if ($numero2 < $numero1 && $numero2 < $numero3) {

        $msg2 = " $numero2 é o menor!";
    } else if ($numero3 < $numero1 && $numero3 < $numero2) {

        $msg2 = "$numero3 é o menor!";
    } else if ($numero1 > $numero2  && $numero2 == $numero3) {

        $msg2 = "O segundo e terceiro número são iguais.";

    }else if ($numero2 > $numero1  && $numero1 == $numero3) {
        $msg2 = "O primeiro e terceiro número são iguais.";
    }else if ($numero3 > $numero2  && $numero1 == $numero2) {
        $msg2 = "O primeiro e segundo número são iguais.";
    }
}
?>



            <p><?= $msg ?? "Valor não Informado" ?> . <?= $msg2 ??" " ?></p>
        </div>

    </main>
</body>

</html>