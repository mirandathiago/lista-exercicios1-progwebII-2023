<?php
    $clima = ["ensolarado", "ameno", "chuvoso", "nublado", "tempestuoso"]; 

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
		<h1>Calculando Taxa de Metabolismo Basal - TMB</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os Dados</h2>
			<form action="questao9.php" method="post">

                <select name="clima">
                    <?php foreach ($clima as $f) { ?>
                        <option value="<?= $f; ?>"> <?= $f; ?> </option>
                    <?php } ?>

                    ?>

                </select>

                <button name="enviar"> Enviar </button>
				
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];	

				switch ($metodo == "POST") {
                    case $clima = "ensolarado";
					$local = "Clube";
					echo "<p>Com o clima {$clima}, recomendamos ir ao {$local}.</p>";
                    break;
                      
                    case $clima = "ameno";
                        $local = "Parque";
                        echo "<p>Com o clima {$clima}, recomendamos ir ao {$local}.</p>";
                        break; 
                        
                    case $clima = "chuvoso";    
					$local = "Cinema";
					echo "<p>Com o clima {$clima}, recomendamos ir ao {$local}.</p>";
                    break;
                      
                    case $clima = "nublado";
                        $local = "Museu";
                        echo "<p>Com o clima {$clima}, recomendamos ir ao {$local}.</p>";
                        break;   

                    case $clima = "tempestuoso";    
                        $local = "ficar em casa";
                        echo "<p>Com o clima {$clima}, recomendamos {$local}.</p>";
                        break;         
                }        
				
				?>
			
		</div>
	</div>
</body>
</html>