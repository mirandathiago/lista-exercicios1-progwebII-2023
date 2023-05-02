<?php
    $vlr = $_POST["valor"];

    $desc = $vlr - ($vlr*0.10);

    $mens = "O valor do produto com desconto será de R$ {$desc},00";
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
		<h1>Atividade 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora de Desconto</h2>
			<form action="questao1.php" method="post">
				<label>Preço do Produto:
                    <br>
					<input type="float" name="valor" value="<?=$vlr?>" required>
				</label>
                <br>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor com Desconto</h2>

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