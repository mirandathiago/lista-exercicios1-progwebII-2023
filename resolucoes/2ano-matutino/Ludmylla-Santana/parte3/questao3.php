<?php
    $n1 = $_POST["num1"];
    $n2 = $_POST["num2"];

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
		<h1>Atividade 3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2></h2>
			<form action="questao3.php" method="post">
				<label>Inicio do Periodo:
                    <br>
					<input type="number" name="num1" value="<?=$n1?>" required>
				</label>
                <br>
                <label>Final do Periodo:
                    <br>
					<input type="number" name="num2" value="<?=$n2?>" required>
				</label>
                <br>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>PAres do Intervalo</h2>

            <?php
                //var_dump($_SERVER["REQUEST_METHOD"]);
                $met = $_SERVER["REQUEST_METHOD"];

                if($met == "POST"){
                    echo"<p>Os números pares entre {$n1} e {$n2} são:</p>";
                    if($n1 % 2 == 0){
                        for($i = $n1; $i < $n2; $i+=2){
                            echo"<p>{$i}</p>";
                        }
                    }else{
                        $n1 += 1;
                        for($i = $n1; $i < $n2; $i+=2){
                            echo"<p>{$i}</p>";
                        }
                    }
                    
                }else{
                    echo"<p>Não é possivel efetuar a operação, por favor verifique o formulário de envio</p>";
                }
            
            ?>
			
		</div>
	</div>
</body>
</html>