<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <title>Energia Conta</title>
</head>
<body>
    <h1>Conta de energia</h1>
    <div class="container">
        <form action="energia.php" method="post">
            <label>
                Quantidade de KWh gasto ao mês:
                <input type="number" name="kwh" placeholder="KWh" required>
            </label>
            <button>Calcular</button>
        </form>
        <div class="resposta" style="display: block;">
        <h5>Resultado:</h5>
            <?php 
            //armazenar valor do formulário
                $khw = $_POST["kwh"] ?? 0;

                $taxaminima = 20;

            //verificação do valor a ser cobrado
              if($khw >= 0 && $khw <= 100){
                //taxa a ser cobrada por kwh
                $valorTaxa = 0.50;
                $valorfinal = $valorTaxa * $khw + $taxaminima;
               }
               elseif ($khw > 100 && $khw < 200) {
                $valorTaxa = 0.70;
                $valorfinal = $valorTaxa * $khw + $taxaminima;
               }
               elseif ($khw > 200) {
                $valorTaxa = 0.87;
                $valorfinal = $valorTaxa * $khw + $taxaminima;
               }

               //mostrar ao usuário
               echo "O valor a ser cobrado é de:{$valorfinal} R$";

            ?>
        </div>
    </div>
</body>
</html>