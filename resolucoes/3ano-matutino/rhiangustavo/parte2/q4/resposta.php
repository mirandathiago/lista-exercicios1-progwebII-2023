<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $a = $_POST["a"];
  $b = $_POST["b"];
  $c = $_POST["c"];
  
  if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
    
    $delta = ($b ** 2) - (4 * $a * $c);
    if ($delta < 0) {
      echo "Não existem raízes reais para essa equação.";
    }
    else {
      $x1 = (-$b + sqrt($delta)) / (2 * $a);
      $x2 = (-$b - sqrt($delta)) / (2 * $a);
    }
    
  }
  else {
    // exibe mensagem de erro se algum dos campos não for numérico
    echo "Por favor, preencha todos os campos com valores numéricos.";
  }
  
}
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
			<h2>Inserir Dados</h2>
			<form action="resposta.php" method="post">
				<label>Valor de a:
					<input type="number" id="a" name="a" required>
				</label>
                <label>Valor de b:
					<input type="number" id="b" name="b" required>
				</label>
                <label>Valor de c:
					<input type="number" id="c" name="c" required>
				</label>
        
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php 
                echo "As raízes da equação são: x1 = {$x1} e x2 = {$x2}"; 
            ?>
		</div>
	</div>
</body>
</html>