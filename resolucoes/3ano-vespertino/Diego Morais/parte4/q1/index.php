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
		<h1>Lista parte-4</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Questão-01</h2>
			<form method="post" action="index.php">
                   <h2>Escolha as suas frutas Favoritas</h2>
                   <br>
                   
                       <ol>
                           <li>Marça<input type="checkbox" name="fruta[]" value="marca"></li>
                           <li>Uva<input type="checkbox" name="fruta[]" value="uva"></li>
                           <li>Banana<input type="checkbox" name="fruta[]" value="banana"></li>
                           <li>Abacate<input type="checkbox" name="fruta[]" value="abacate"></li>
                           <li>Manga<input type="checkbox" name="fruta[]" value="manga"></li>
                       </ol>
               
				<button name="enviar" submit> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
            
    
          <?php
         
          $frutas = $_POST["fruta"] ?? [""];
          echo "<h2>Frutas que foram escohidas:</h2>";
            
          foreach($frutas as $value){
          
          echo "<li>$value</li><br>";
          }
     
          
          ?>
         
            
			
		</div>
	</div>
</body>
</html>