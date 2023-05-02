<?php 
	 $nome = $_POST["nome"]?? "";
     $idade = $_POST["idade"] ?? 0;
	 $peso = $_POST["peso"] ?? 0;
	 $altura = $_POST["altura"] ?? 0;
	 $sexo = $_POST["sexo"] ?? "";
     



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
		<h1>Estruturas Condicionais</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora</h2>
			<form action="index.php" method="post">

                <label> Nome :
					<input type="text" name="nome" required value="<?= $nome ?>">
				</label>
				<label>Idade:
					<input type="number" name="idade" required value="<?= $idade ?>">
				</label>
				<label for="Peso"> Peso :
					<input type="float" name="peso" required value="<?= $peso ?>">
				</label>
				<label for="Altura">Altura:

					<input type="float" name="altura" required value="<?= $altura ?>">
				     <br>
                     <br>
				</label>
                <label>Genero:
                    <select name="sexo">
                    <option value="">Selecione</option>
                    <option value="1">MASCULINO</option>
                    <option  value="2">FEMININO</option>
                    </select>
				</label>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php 
                  switch($sexo){
                    case "1":
                        $soma = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $idade);
                        echo "{$nome} sua taxa de metabolismo basal (TMB) é de aproximadamente: {$soma} calorias por dia";    
                    break;
                    case "2":
                        $soma = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $idade);
                        echo "{$nome} sua taxa de metabolismo basal (TMB) é de aproximadamente: {$soma} calorias por dia";    
                    break;
                    default:
                        echo 'Por favor, selecione um gênero válido.';
                    
                    
                 }

                



				
            ?>
		</div>
	</div>
</body>
</html>