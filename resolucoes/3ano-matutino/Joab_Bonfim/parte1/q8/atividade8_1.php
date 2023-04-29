<?php
    $vlr = $_POST["valor"];
    $parc = $_POST["parcela"];

    if($parc == 1){
        $tot = $vlr;
    }else{
        $tot = $vlr * 0.04;
        $tot = $tot * $parc;
    }

    $mens = "O valor total do produto após o parcelamento será de R$ {$tot},00";
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
		<h1>Atividade 8</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora de parcelamento</h2>
			<form action="atividade8_1.php" method="post">
				<label>Preço do Produto:
                    <br>
					<input type="float" name="valor" value="<?=$vlr?>" required>
				</label>
                <br>
                <label>Parcelamento:
                    <br>
					<select type="number" name="parcela" value="<?=$parc?>" required>
                    <option value = 1>À Vista</option>
                    <option value = 2>2 vezes</option>
                    <option value = 3>3 vezes</option>
                    <option value = 4>4 vezes</option>
                    <option value = 5>5 vezes</option>
                    <option value = 6>6 vezes</option>
                    <option value = 7>7 vezes</option>
                    <option value = 8>8 vezes</option>
                    <option value = 9>9 vezes</option>
                    <option value = 10>10 vezes</option>
                    <option value = 11>11 vezes</option>
                    <option value = 12>12 vezes</option>
				</label>
                <br>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Parcelamento</h2>

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