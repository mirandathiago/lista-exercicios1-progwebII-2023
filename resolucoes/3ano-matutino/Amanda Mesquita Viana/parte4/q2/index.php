<?php
          
    $lista = $_POST["nomes"] ?? "";     
	$nomes = explode("\n", $lista);

	$sort = rand(0, count($nomes)-1);

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
		<h1>Sorteio de nomes</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escolha o número inicial e o número final</h2>
			<form action="index.php" method="post" id="formulario">
				<label>Lista de nomes:
					<textarea id="mensagem" name="nomes" required></textarea>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<p>
				<?php
                    
                    echo "A pessoa sorteada foi ". $nomes[$sort];
                    
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
                    url: "index.php",
                    type: "POST",
                    data: $(this).serialize
                })
            })
        })

    </script>
</body>
</html>