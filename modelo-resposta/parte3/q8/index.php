<!--O Instituto Nacional de Estatística precisa de um programa que calcule em quantos anos a população de uma cidade 
A irá ultrapassar a população de uma cidade B, considerando suas respectivas taxas de crescimento. O programa deve
 solicitar ao usuário o número atual de habitantes e a taxa anual de crescimento de cada cidade através de um formulário.
  Caso a população de A já seja maior do que a população de B, o programa deve informar que a cidade A já tem mais 
  habitantes do que a cidade B e encerrar. Já se a taxa de crescimento de A for menor do que a taxa de crescimento de B, 
  o programa deve informar que a cidade A não alcançará o número de habitantes da cidade B com essa taxa de crescimento.

O programa deve exibir o número de anos necessários para que a população de A ultrapasse a população de B e
 também a população de cada cidade ao final desse período. O usuário deverá informar os valores através de um 
 formulário e a solução deve utilizar alguma estrutura de repetição para realizar os cálculos necessários.
Entrada: número de habitantes da cidade A: 80000, taxa anual de crescimento da cidade A (%): 3, número de habitantes 
da cidade B: 200000, taxa anual de crescimento da cidade B (%): 1.5
Saída: Serão necessários 63 anos para que a população da cidade A ultrapasse a da cidade B.
-->

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
		<h1>Formulário de População</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form method="POST" action="q8.php">
                    <label for="popA">População da cidade A:</label>
                    <input type="text" id="popA" name="popA">
                    <label for="taxaA">Taxa de crescimento anual da cidade A (%):</label>
                    <input type="text" id="taxaA" name="taxaA">
                    <label for="popB">População da cidade B:</label>
                    <input type="text" id="popB" name="popB">
                    <label for="taxaB">Taxa de crescimento anual da cidade B (%):</label>
                    <input type="text" id="taxaB" name="taxaB">
                    <input type="submit" value="Calcular">
            </form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
            // Obtém as variáveis de entrada do método GET
                $popA = $_GET['popA'];
                $taxaA = $_GET['taxaA'];
                $popB = $_GET['popB'];
                $taxaB = $_GET['taxaB'];

            // Verifica se A já tem mais habitantes que B
                if ($popA >= $popB) {
                    echo "A cidade A já tem mais habitantes do que a cidade B.";
                    exit;
                }

            // Verifica se a taxa de crescimento de A é menor que a de B
                if ($taxaA <= $taxaB) {
                    echo "A cidade A não alcançará o número de habitantes da cidade B com essa taxa de crescimento.";
                    exit;
                }

            // Inicializa as variáveis
                $anos = 0;

            // Loop para calcular os anos necessários para A ultrapassar B
                while ($popA < $popB) {
                    $popA += $popA * ($taxaA / 100);
                    $popB += $popB * ($taxaB / 100);
                    $anos++;
                }

            // Exibe o resultado
                echo "Serão necessários $anos anos para que a população da cidade A ultrapasse a da cidade B. ";
                echo "Ao final desse período, a população da cidade A será de ".number_format($popA, 0, ',', '.')." habitantes e a população da cidade B será de ".number_format($popB, 0, ',', '.')." habitantes.";
                ?>
		</div>
	</div>
</body>
</html>