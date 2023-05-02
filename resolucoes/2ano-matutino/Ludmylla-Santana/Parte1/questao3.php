<?php
    $n1 = $_POST["note1"];
	$n2 = $_POST["note2"];
	$n3 = $_POST["note3"];

	$np1 = $n1*2;
	$np2 = $n2*3;
	$np3 = $n3*5;

    $med = ($np1+$np2+$np3)/10;

    $mens = "<p>A nota da primeira prova foi de {$n1} pontos quanto à média</p>
            <br>
            <p>A nota da segunda prova foi de {$n2} pontos quanto à média</p>
            <br>
			<p>A nota da terceira prova foi de {$n3} pontos quanto à média</p>
            <br>
			<p>Sendo assim a média do aluno foi de {$med}pontos</p>";
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
			<h2>SUAP PROFESSOR</h2>
			<form action="questao3.php" method="post">
				<label>Nota 1 com peso 2:
                    <br>
					<input type="float" name="note1" value="<?=$n1?>" required>
				</label>
                <br>
				<label>Nota 2 com peso 3:
                    <br>
					<input type="float" name="note2" value="<?=$n2?>" required>
				</label>
                <br>
				<label>Nota 3 com peso 5:
                    <br>
					<input type="float" name="note3" value="<?=$n3?>" required>
				</label>
                <br>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>SUAP ALUNO</h2>

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