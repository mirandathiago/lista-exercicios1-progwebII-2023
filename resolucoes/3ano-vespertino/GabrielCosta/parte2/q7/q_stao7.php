<?php 
$idade = $_POST["idade"] ?? 0;
$peso = $_POST["peso"] ?? 0;
$altura = $_POST["altura"] ?? 0;
$genero = $_POST["genero"] ?? 0;
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
		<h1>TMB</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="q_stao7.php" method="post">
				
				<label>Idade:
					<input type="number" name="idade" value="<?=$idade?>" required>
				</label>
                <label>Peso:
					<input type="weight" name="peso" value="<?=$peso?>" required>
				</label>
				<label>Altura:
					<input type="height" name="altura" value="<?=$altura?>" required>
				</label>
                
								
				<fieldset>
          <legend>Sexo</legend>
          <input type="radio" name="sexo" id="sexo-masc" value="M" required>
          <label for="sexo-masc">Masculino</label>
          <input type="radio" name="sexo" id="sexo-fem" value="F" required>
          <label for="sexo-fem">Feminino</label>
        </fieldset>
				<button name= "enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
           <?php 
          
		 echo   "Idade: {$idade} anos <br>
		 		 Peso:  {$peso}kg <br>
				 Altura: {$altura}m <br>
		 		 Sexo: {$sexo}
		   		" 
           ?>
		  
		</div>
	</div>
</body>
</html>