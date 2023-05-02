<?php
    $n1 = $_GET["n1"] ?? 0;
    $n2 = $_GET["n2"] ?? 0;
    $n3 = $_GET["n3"] ?? 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 1 Parte 2</title>
</head>
<body>
    <header>
	    <h1>Maior e Menor</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe três números:</h2> <br>
			<form action="index.php" method="get">
				<label>Primeiro número: 
                    <input type="number" name="n1" value="<?=$n1?>" required>
                </label>
				<label>Segundo número:
                    <input type="number" name="n2" value="<?=$n2?>" required>
                </label>
                <label>Terceiro número:
                    <input type="number" name="n3" value="<?=$n3?>" required>
                </label>
                <button>Enviar</button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
                $maior = "";
                $menor = "";
                $igual = "";
                if($n1 >= $n2 && $n1 >= $n3){
                    $maior = $n1;
                }else{
                    if($n2 >= $n1 && $n2 >= $n3){
                        $maior = $n2;
                    }else if($n3 >= $n1 && $n3 >= $n2){
                        $maior = $n3;
                    }
                }
                if($n1 <= $n2 && $n1 <= $n3){
                    $menor = $n1;
                }else{
                    if($n2 <=$n1 && $n2 <= $n3){
                        $menor = $n2;
                    }else if($n3 <= $n1 && $n3 <= $n2){
                        $menor = $n3;
                    }
                }
			?>
            <?php if($n1 == $n2 && $n1 == $n3){?>
			<h2>Todos são iguais</h2>
            <?php }else{?>
			<h2>Maior: <?=$maior?></h2>
            <h2>Menor: <?=$menor?></h2>
            <?php }?>

		</div>
	</div>
</body>
</html>