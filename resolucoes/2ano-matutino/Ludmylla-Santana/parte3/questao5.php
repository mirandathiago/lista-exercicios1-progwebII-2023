<?php
    $vlr1 = $_POST["valor"];
    $porc = $_POST["porcentagem"];
    $porc = $porc / 100;
    $vlr2 = $_POST["valormen"];
    $vlrc = 0;
    $mes = 0;

    while($vlrc != $vlr1){
        $vlr1 = $vlr1 * $porc;
        $vlrc += $vlr2;
        $mes +=1;

    }
    
    if($mes > 1){
        $mens = "Precisará de {$mes} meses para quitar a dívida";
    }else{
        $mens = "Precisará de 1 mês para quitar a dívida";
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista de Atividades</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Atividade 5</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora de Desconto</h2>
			<form action="questao5.php" method="post">
				<label>Preço da dívida:
                    <br>
					<input type="float" name="valor" value="<?=$vlr1?>" required>
				</label>
                <br>
                <label>Porcentagem mensal:
                    <br>
					<input type="float" name="porcentagem" value="<?=$porc?>" required>
				</label>
                <br>
                <label>Valor mensal a ser pago:
                    <br>
					<input type="float" name="valormen" value="<?=$vlr2?>" required>
				</label>
                <br>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Quitando a dívida</h2>

            <?php
                //var_dump($_SERVER["REQUEST_METHOD"]);
                $met = $_SERVER["REQUEST_METHOD"];

                if($met == "POST"){
                    echo"<p>{$mens}</p>";
                }else{
                    echo"<p>Não é possivel efetuar a operação, por favor verifique o formulário de envio</p>";
                }
            
            ?>
			
		</div>
	</div>
</body>
</html>