<?php
    $Kw = $_POST["KwH"];

    if($Kw < 100){
        $cont = $Kw * 0.5;
    }elseif(101 < $Kw > 200){
        $cont = $Kw * 0.7;
    }else{
        $cont = $Kw * 0.87;
    }

	if($cont < 20){
		$cont = 20;
	}else{};

    $mens = "O valor da conta de energia será de R$ {$cont},00";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista de Atividades</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css_comum.css">
</head>
<body>
	<header>
		<h1>Atividade 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora de Quilowatts-Hora</h2>
			<form action="atividade1_2.php" method="post">
				<label>Medidor de Quilowatts-Hora:
                    <br>
					<input type="number" name="KwH" value="<?=$Kw?>" required>
				</label>
                <br>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor da Conta de Energia</h2>

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