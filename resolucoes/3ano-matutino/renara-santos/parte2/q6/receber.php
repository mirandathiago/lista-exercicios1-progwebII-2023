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
		<h1>Tipos de Triângulos</h1>
	</header>
	<div class="container">
    <div class="box resposta">
			<h2>Resultado</h2>
            <?php
            $lado1= $_POST['lado1'];
            $lado2= $_POST['lado2'];
            $lado3= $_POST['lado3'];

            if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
                if ($lado1 == $lado2 && $lado2 == $lado3) {
                    echo "É possível formar um triângulo equilátero.";
                } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                    echo "É possível formar um triângulo isósceles.<br>";
                } else {
                    echo "É possível formar um triângulo escaleno.<br>";
                }
            }     else {
                    echo "Não é possível formar um triângulo.<br>";
            
            
            }
            ?>
			
            <a href="triang.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>