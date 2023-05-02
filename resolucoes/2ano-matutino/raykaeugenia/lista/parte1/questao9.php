<?php

$real = $_POST["real"] ?? 0;
$resultado = $_POST["resultado"] ?? 0;


$resultado = $real  / 5.30;


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
		<h1>Estrutura de Repetição</h1>
	</header>
	<div class="container">
		<div class="box resposta">
		<form action="questao9.php"method="post">
    <label>:
    <input type="number"  name="real" required>
    </label>
    <button>Enviar</button>
	<h2>
    Resultado da conversão em dolar :
</h2>

<h3>
    <?php
    echo number_format($resultado, 2);
    ?>
</h3>


  </form>


            
		</div>
	</div>
</body>
</html>