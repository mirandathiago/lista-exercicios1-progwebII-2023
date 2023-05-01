<!--
    Um atleta de corrida de rua está treinando para uma maratona. Ele correu 10 km em 45 minutos no primeiro dia e quer aumentar sua velocidade para conseguir completar a maratona em menos de 4 horas. Crie um formulário que receba a distância que ele quer percorrer e o tempo que ele quer completar a prova e calcule a velocidade média que ele precisa atingir em km/h usando PHP. 
    Exemplo:
    Entrada: distância = 42 km, tempo = 4 horas. 
    Saída esperada: velocidade média = 10.5 km/h.
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>Calculadora de Combustivel</h1>
	</header>
	<div class="container">
		<div class="box formulario">
            <form action="index.php" method="POST">
                Distância a percorrer (km): <input type="number" name="distancia"><br><br>
		        Tempo para completar a prova (horas): <input type="number" step="0.01" name="tempo"><br><br>
		        <button type="submit" name="submit">Calcular</button>
            </form>
		</div>
		<div class="box resposta">
			<h2>Distancia</h2>
			<?php
                   if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $distancia = isset($_POST["distancia"]) ? $_POST["distancia"] : null;
                    $tempo = isset($_POST["tempo"]) ? $_POST["tempo"] : null;
                    if ($distancia && $tempo && $tempo > 0) {
                        $tempo_em_horas = $tempo;
                        $distancia_em_km = $distancia;
                        $velocidade_media = $distancia_em_km / $tempo_em_horas;
                        echo "Velocidade média necessária: " . number_format($velocidade_media, 1) . " km/h";
                    } else {
                        echo "Por favor, preencha todos os campos e verifique se o tempo é maior que zero.";
                    }
                }
			?>
		</div>
	</div>
</body>
</html>