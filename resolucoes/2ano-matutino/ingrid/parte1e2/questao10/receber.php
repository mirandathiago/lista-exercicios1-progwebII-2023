<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>juros</title>
</head>

<body>

    <h2>Calcular</h2>

    <?php
 //criamos variaveis locais
$divida=$_POST['divida'];
$taxa = $_POST['taxa'];
$pago = $_POST['pago'];

    echo "Capital inicial: " . number_format($capital, 2, ",", ".") . "<br>";

    // Tempo do emprestimo
    $tempo = 3;
    echo "Prazo: $tempo <br>";

    // Porcentagem de juros do emprestimo
    $taxa_juro = 5 / 100; // 0.05
    echo "Taxas de juros: $taxa_juro <br>";

    // Total de juro a ser pago
    $total_juro = $capital * $taxa_juro * $tempo;
    echo "Total de juros a ser pago: ". number_format($total_juro, 2, ",", "."). "<br>";

    // Montante a ser pago, capital inicial mais juro
    $montante_pagar = $capital * (($taxa_juro * $tempo) + 1);
    echo "Montante a ser pago: ". number_format($montante_pagar, 2, ",", "."). "<br><br>";

    // Calcular o valor de cada parcela
    $valor_parc = $montante_pagar / $tempo;

    // Variável para controlar o WHILE
    $controle = 1;

    // Recuperar a data atual
    $data_atual = new DateTime();

    // Variável para receber o valor total pago
    $valor_total_pago = 0;

    // Laço de repetição para imprimir o valor das parcelas
    while ($controle <= $tempo) {

        // Somar um mês na data
        $data_atual->add(new DateInterval("P1M"));

        echo "Número da parcela: $controle <br>";
        echo "Data de vencimento: " . $data_atual->format('d/m/Y') . "<br>";

        // Acessa o IF quando é última parcela para corrigir o valor da compra
        if ($controle == $tempo) {
            // Utilizar a soma das parcelas já impressa e subtrair do valor total da compra para obter o valor a última parcela e corrigir a diferença
            $valor_ultima_parc = $montante_pagar - $valor_total_pago;

             // Converter o valor da parcela para o formato Real separado pela virgula
            echo "Valor da parcela: " . number_format($valor_ultima_parc, 2, ",", "."). "<br>";

            // Somar o valor total pago
            $valor_total_pago = $valor_total_pago + number_format($valor_ultima_parc, 2, ".", "");
        } else {
             // Converter o valor da parcela para o formato Real separado pela virgula
            echo "Valor da parcela: " . number_format($valor_parc, 2, ",", "."). "<br>";

            // Somar o valor total pago
            $valor_total_pago = $valor_total_pago + number_format($valor_parc, 2, ".", "");
        }

        echo "<hr>";

        // Incrementar a variável após imprimir a parcela
        $controle++;
    }

    // Imprimir o valor total da soma das parcelas e converter para o formato Real separado pela virgula
    echo "Valor total pago: " . number_format($valor_total_pago, 2, ",", ".") . "<br>";
    ?>

</body>

</html>