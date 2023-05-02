<?php

          
	$valor_inicial = $_POST["valor"] ?? 254;       
	$valor = $valor_inicial;

	$c100 = 0;
	$c50 = 0;
	$c20 = 0;
	$c10 = 0;
	$c5 = 0;
	$c2 = 0;
	$c1 = 0;

	$c100 = intdiv($valor, 100);
	$valor = $valor % 100;
	$c50 = intdiv($valor, 50);
	$valor = $valor % 50;
	$c20 = intdiv($valor, 20);
	$valor = $valor % 20;
	$c10 = intdiv($valor, 10);
	$valor = $valor % 10;
	$c5 = intdiv($valor, 5);
	$valor = $valor % 5;
	$c2 = intdiv($valor, 2);
	$valor = $valor % 2;
	$c1 = intdiv($valor, 1);
	$valor = $valor % 1;
	



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
		<h1>Caixa Eletônico</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Cédulas</h2>
			<form action="index.php" method="post" id="formulario">
				<label>Valor:
					<input type="number" name="valor" value="<?=$valor_inicial?>" required>
				</label>
            
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<p><?=$c100?> nota(s) de R$100</p>
			<p><?=$c50?> nota(s) de R$50</p>
			<p><?=$c20?> nota(s) de R$20</p>
			<p><?=$c10?> nota(s) de R$10</p>
			<p><?=$c5?> nota(s) de R$5</p>
			<p><?=$c2?> nota(s) de R$2</p>
			<p><?=$c1?> nota(s) de R$1</p>
		</div>
	</div>

    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function(e) {
            $("#formulario").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "index.php",
                    type: "POST",
                    data: $(this).serialize
                })
            })
        })

    </script>
</body>
</html>