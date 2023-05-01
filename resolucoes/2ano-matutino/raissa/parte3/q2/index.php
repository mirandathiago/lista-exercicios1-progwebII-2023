<?php
    $n = $_POST["num"] ?? 0;
    $mult = 9;

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
		<h1>Atividade 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Tabuada</h2>
			<form action="questao2.php" method="post">
				<label>Número:
                    <br>
					<input type="number" name="num" value="<?=$n?>" required>
				</label>
                <br>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<? "<h2>Tabuada do {$n}</h2>" ?>

            <?php
                //var_dump($_SERVER["REQUEST_METHOD"]);
                $met = $_SERVER["REQUEST_METHOD"];

                if($met == "POST"){
					while($mult > 1){
						$result = $n * $mult;
                    echo"<p>{$n} x {$mult} = {$result}</p>";
					}
                }else{
                    echo"<p>Não é possivel efetuar a operação, por favor verifique o formulário de envio</p>";
                }
            
            ?>
			
		</div>
	</div>
</body>
</html>