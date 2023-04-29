<?php

$num1 = $_POST["num1"] ?? 0;
$num2 = $_POST["num2"] ?? 0;


$quant = 0;

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
		<h1>Formulário de números pares</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Números</h2>
			<hr>
			<br>
			<form action="index.php" method="post">
				<label>Número 1:
					<input type="number" id="numero" name="num1" required>
				</label>
				<label>Número 2:
					<input type="number" id="numero" name="num2" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<hr>
			<br>
			<?php

       
        if($num1 > $num2){
        $num1 = $num2;
        $num2 = $_POST["num1"];
    }
        for($i= $num1; $i <= $num2; $i++){
          if($i % 2 == 0){
          $quant++;
          }
       
    }
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Quantidade de números pares:", " ", $quant;
	}
?>
		</div>
	</div>
</body>
</html>