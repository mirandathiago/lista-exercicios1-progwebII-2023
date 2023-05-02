
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
		<h1>Sorteio de Pessoas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action="index.php" method="post">
			  <fieldset>
              <label for="pessoas">Digite o nome das pessoas (um por linha):</label><br>
		        <textarea name="pessoas" id="pessoas" cols="30" rows="10"></textarea><br>
		        <input type="submit" value="Sortear">
			  </fieldset>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
            <?php
                if(isset($_POST['pessoas'])){
                    $pessoas = $_POST['pessoas'];
                    $array_pessoas = explode("\n", $pessoas);
                    $qtd_pessoas = count($array_pessoas);
        
                    if($qtd_pessoas > 0){
                        $indice_sorteado = rand(0, $qtd_pessoas-1);
                        $pessoa_sorteada = $array_pessoas[$indice_sorteado];
                        echo "<p>A pessoa sorteada foi: <strong>$pessoa_sorteada</strong></p>";
                    }else{
                        echo "<p>Nenhuma pessoa foi encontrada.</p>";
                    }
                }
            ?>


		</div>
	</div>
</body>
</html>