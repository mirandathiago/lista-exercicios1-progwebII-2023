<?php
    $n = $_POST["numum"] ?? 0;

    $result=1;

    for($i = $n; $i>=1; $i--){
        $result = $result * $i;
    }

    $mens = "O Fatorial de {$n}! é {$result}";
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
			<h2>Calculadora Fatorial</h2>
			<form action="questao1.php" method="post">
				<label>Número fatorial:
                    <br>
					<input type="number" name="numum" value="<?=$n?>" required>
				</label>
                <br>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<?php "<h2>Fatorial de {$n}</h2>" ?>

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