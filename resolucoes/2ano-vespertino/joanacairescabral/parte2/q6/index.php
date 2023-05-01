<?php
    $lado1=$_POST["lado1"] ?? 0;
    $lado2=$_POST["lado2"] ?? 0;
    $lado3=$_POST["lado3"] ?? 0;
    $mensagem="";
    if($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1){
        if($lado1 == $lado2 && $lado1 == $lado3) {
            $mensagem="É possível formar um triângulo equilátero.";
        } else if($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            $mensagem="É possível formar um triângulo isósceles.";
        } else {
            $mensagem="É possível formar um triângulo escaleno.";
        }
    }else{
        $mensagem="Não é possível formar um triangulo";
    }

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
		<h1>Triângulo</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="post">
				<label>medida do lado 1:
                    <input type="number" name="lado1" step="0.1">
                </label>        
                <label>medida do lado 2:
                    <input type="number" name="lado2" step="0.1">
                </label>            
                <label>medida do lado 3:
                    <input type="number" name="lado3" step="0.1">
                </label>            
                <button name="enviar"> Calcular </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
            <?= "<p>{$mensagem}</p>"?>
		</div>
	</div>
</body>
</html>