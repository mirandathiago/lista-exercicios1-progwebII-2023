<?php

          
    $num = $_POST["num"] ?? 0;          
    $escolha = $_POST["escolha"] ?? "par";

	$num_rand = rand(0,10);
	$soma = $num + $num_rand;

	if ($escolha == "par") {
		if ($soma % 2 == 0) {
			$ganhou = true;
		} else {
			$ganhou = false;
		}	
	} else {
		if ($soma % 2 != 0) {
			$ganhou = true;
		} else {
			$ganhou = false;
		}
	}
	
	/*if ($ganhou) {
		$mensagem = "O usuário escolheu $escolha e o número $num. O computador sorteou o número $num_rand, e a soma deles é $soma. $soma é ". $escolha = ($escolha == 2) ? "par" : "ímpar"." e o usuário venceu.";
	} else {
		$mensagem = "O usuário escolheu". $escolha = ($escolha == 1) ? "par" : "ímpar"."e o número ${num}. O computador sorteou o número ${num_rand}, e a soma deles é ${soma}. ${soma} é ". $escolha = ($escolha == 2) ? "par" : "ímpar"." e o computador venceu.";
	}*/
	

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
		<h1>Gerador de Números Ímpares</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Jogo Par ou Ímpar</h2>
			<form action="formulario-resposta.php" method="post" id="formulario">
				<label>Número:
					<input type="number" name="num" value="<?=$num?>" required>
				</label>
				<label>Escolha (Par ou Ímpar):
					<select name="escolha">
						<option></option>
						<option value="par" <?= ($escolha == "par") ? "selected" : ""?> >Par</option>
						<option value="impar" <?= ($escolha == "par") ? "" : "selected"?> >Ímpar</option>
					</select>
			   	</label>
            

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<p>
				<?php
					if ($ganhou) {
						echo $mensagem = "O usuário escolheu $escolha e o número $num. O computador sorteou o número $num_rand, e a soma deles é $soma. $soma é ". $retVal = ($soma % 2 == 0) ? "par" . " e o usuário venceu" : "ímpar" . " e o usuário venceu";
					} else {
						echo $mensagem = "O usuário escolheu $escolha e o número $num. O computador sorteou o número $num_rand, e a soma deles é $soma. $soma é ". $retVal = ($soma % 2 == 0) ? "par" ." e o computador venceu" : "ímpar"." e o computador venceu";
					}
					 
				?>
			</p>
		</div>
	</div>

    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function(e) {
            $("#formulario").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "formulario-resposta.php",
                    type: "POST",
                    data: $(this).serialize
                })
            })
        })

    </script>
</body>
</html>