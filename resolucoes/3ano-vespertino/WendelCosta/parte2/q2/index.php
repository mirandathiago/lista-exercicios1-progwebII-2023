<?php 

/*
	2- Seu João quer saber quanto vai ser a sua conta de energia no mês apenas olhando para o medidor de energia de sua residência. Para ajudá-lo crie um formulário que receba o consumo de energia elétrica em kWh (quilowatts-hora). Em seguida, crie um código em PHP que calcule o valor da conta de energia com base nas seguintes regras:
	Até 100 kWh, o valor é de R$ 0,50 por kWh.
	De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.
	Acima de 200 kWh, o valor é de R$ 0,87 por kWh.
	Além disso, a conta de energia possui uma taxa mínima de R$ 20,00. Portanto, caso o valor calculado seja inferior a R$ 20,00, o valor a ser cobrado deve ser de R$ 20,00.
	Exemplo de entrada: Consumo de energia: 250 kWh
	Exemplo de saída: Valor da conta de energia: R$ 237,50
*/


    $energia = $_POST["energia"] ?? 0;

?>


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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Cálculo da temperatura</h2>
			<form action="index.php" method="post">
                <label>
                    Consumo de energia:
                        <input type="number" id="energia" name="energia" required >
                </label>



				<button name="enviar"> Enviar </button>

                <?php 
                
                    if($energia <= 100){
                        $valor_total = $energia * 0.50;
                    } else if($energia > 100 && $energia <= 200){
                        $valor_total = $energia * 0.70;
                    } else if($energia > 200){
                        $valor_total = $energia * 0.87;
                    } else $valor_total = 20;
                ?>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor da Energia</h2>
			<h4>A quantidade de energia gasta foi de: <?=$energia?>kWh</h4>
            <h4>O valor a ser pago é de: <?=$valor_total?>R$</h4>
		</div>
	</div>
</body>
</html>