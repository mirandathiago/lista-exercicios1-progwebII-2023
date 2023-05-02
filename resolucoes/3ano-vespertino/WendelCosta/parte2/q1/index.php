<?php 

/*
    1- crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.
    Entrada: 2 5 1
    Saída: Menor Número: 1 e o Maior Número: 5
*/


    $num1 = $_POST["num1"] ?? 1;
    $num2 = $_POST["num2"] ?? 1;
    $num3 = $_POST["num3"] ?? 1;

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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Maior e Menor número</h2>
			<form action="index.php" method="post">
                <label>
                    Primeiro número:
                        <input type="number" id="num1" name="num1" required >
                </label>

				<label>
                    Segundo número:
                        <input type="number" id="num2" name="num2" required >
                </label>
                <label>
                    Terceiro número:
                        <input type="number" id="num3" name="num3" required >
                </label>


				<button name="enviar"> Enviar </button>

                <?php 
                
                    if ($num1 < $num2 && $num1 < $num3) {
                        $menornum = $num1;
                        if($num2 > $num3){
                            $maiornum = $num2;
                        } else $maiornum = $num3;
                        

                    } else if ($num2 > $num3) {
                        $maiornum = $num2;
                        $menornum = $num3;
                    } else{
                        $maiornum = $num3;
                        $menornum = $num2;
                    } 
                ?>
			</form>
		</div>
		<div class="box resposta">
			<h2>Maior e menor número</h2>
			<h4>Os números escolhidos foram: <?=$num1?>, <?=$num2?>, <?=$num3?></h4>
            <h4>O maior número é: <?=$maiornum?></h4>
            <h4>O menor número é: <?= $menornum?></h4>
		</div>
	</div>
</body>
</html>