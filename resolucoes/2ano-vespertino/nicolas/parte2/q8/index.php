<?php

    /*
    8-  O IMC (Índice de Massa Corporal) é uma medida que indica se a pessoa está dentro do peso ideal.Crie um formulário 
    que permita ao usuário informar o peso e a altura. Com base nesses dados, calcule o IMC (Índice de Massa Corporal) e 
    exiba em qual faixa de peso a pessoa se encontra. Utilize as seguintes faixas: abaixo do peso (IMC menor que 18,5), 
    peso normal (IMC entre 18,5 e 24,9), sobrepeso (IMC entre 25 e 29,9), obesidade grau 1 (IMC entre 30 e 34,9), 
    obesidade grau 2 (IMC entre 35 e 39,9) e obesidade grau 3 (IMC igual ou maior que 40).

    O cálculo do IMC é realizado pela fórmula: IMC = peso / (altura^2), onde peso é a massa corporal em quilogramas e 
    altura é a altura em metros elevada ao quadrado.

    Utilize condicionais compostas com operadores lógicos para verificar em qual faixa de peso a pessoa se encontra.
    Exemplo de entrada e saída:

    Entrada: Peso: 70 kg, Altura: 1.70 m
    Saída: Seu IMC é 24.22, você está na faixa de peso normal.
    Entrada: Peso: 90 kg, Altura: 1.75 m
    Saída: Seu IMC é 29.39, você está na faixa de sobrepeso.
    */

    $peso = $_POST["peso"] ?? 10; // recebe peso
    $altura = $_POST["altura"] ?? 1.20; // recebe altura
    $imc = $peso / ($altura ** 2); // formula imc
    $imc = number_format($imc, 2); // função que deixa só duas casas decimais

    // confere as faixas de peso
    if($imc < 18.5){

        $msg = "<p class='alerta-amarelo'>Seu IMC é {$imc}, você está na faixa de abaixo do peso.</p>";

    } 
    elseif ($imc >= 18.5 && $imc <= 24.9) {

        $msg = "<p class='alerta-verde'>Seu IMC é {$imc}, você está na faixa de peso normal.</p>";

    } 
    elseif ($imc >= 25 && $imc <= 29.9) {

        $msg = "<p class='alerta-amarelo'>Seu IMC é {$imc}, você está na faixa de sobrepeso.</p>";

    } 
    elseif ($imc >= 30 && $imc <= 34.9) {

        $msg = "<p class='alerta-vermelho'>Seu IMC é {$imc}, você está na faixa de obesidade grau 1.</p>";

    } 
    elseif ($imc >= 35 && $imc <= 39.9) {

        $msg = "<p class='alerta-vermelho'>Seu IMC é {$imc}, você está na faixa de obesidade grau 2.</p>";

    } 
    else {

        $msg = "<p class='alerta-vermelho'>Seu IMC é {$imc}, você está na faixa de obesidade grau 3.</p>";

    }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 8</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<h1>Calculdora IMC</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Digite o peso e a altura nos seguintes campos:</h2>
			<form action="index.php" method="post">

				<label>Digite seu peso(Kg):
                <input type="number" name="peso" step="0.01" min=10 required value="<?=$peso?>"> 
				</label>

                <label>Digite o sua altura(m):
                <input type="number" name="altura" step="0.01" min=1.20 required value="<?=$altura?>"> 
				</label>
                
				<button name="enviar"> Calcular </button>
			</form>
		</div>

        <div class="box resposta">
			<h2>Resultado</h2>
			<?php

                $metodo = $_SERVER["REQUEST_METHOD"]; //  dados do servidopr e da requisição que está ocorrendo no momento.
                
                if($metodo == "POST"){ // verifica se o metodo é post e imrpime a mensagem na tela

                    echo $msg; // imprime a mensagem (saída)

                }
                else{ // se não for post, é pq aguarda o envio do formulário

                    echo "<p class='alerta-amarelo'>AGUARDANDO O ENVIO DO FORMULÁRIO</p>"; // mesnagem de aguardo ao envio do formulário

                }

            ?>
		</div>		
	</div>
</body>
</html>
