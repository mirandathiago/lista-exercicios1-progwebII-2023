<?php
    $n1 = $_POST["num1"];
    $n2 = $_POST["num2"];
    $n3 = $_POST["num3"];

    if($n1 > $n2 && $n1 > $n3){
        $maior = $n1;
    }elseif($n2 > $n1 && $n2 > $n3){
        $maior = $n2;
    }elseif($n3 > $n1 && $n3 > $n2){
        $maior = $n3;
    }

    if($n1 < $n2 && $n1 < $n3){
        $menor = $n1;
    }elseif($n2 < $n1 && $n2 < $n3){
        $menor = $n2;
    }elseif($n3 < $n1 && $n3 < $n2){
        $menor = $n3;
    }

    $mens = "O maior número é {$maior} e o menor número é {$menor}";
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
			<h2>Qual é o maior?</h2>
			<form action="questao1.php" method="post">
				<label>Número:
                    <br>
					<input type="number" name="num1" value="<?=$n1?>" required>
				</label>
                <br>
                <label>Número:
                    <br>
					<input type="number" name="num2" value="<?=$n2?>" required>
				</label>
                <br>
                <label>Número:
                    <br>
					<input type="number" name="num3" value="<?=$n3?>" required>
				</label>
                <br>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>O MAior é:</h2>

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