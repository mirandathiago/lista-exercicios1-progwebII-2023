<?php
    $int = $_GET["num"] ?? 1;
    $i = 0;
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
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
              
                while( $i <= 10){
                    $mult = $int * $i;

                    echo("$int x $i = $mult<br>");
                    $i++;
                }

            ?>
			<a href="formulario.php">
				<button>Voltar</button>
			</a>
		</div>
	</div>
</body>
</html>