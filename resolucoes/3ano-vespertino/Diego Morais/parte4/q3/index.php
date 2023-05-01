






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
			<h2>Questão-03</h2>
			<form method="post" action="index.php">
                   <h2>Escolha 3 sabores que você deseja para sua pizza</h2>
                   <br>
                   
                       <ol>
                            
                           <li>Musarela<input type="checkbox" name="pizza[]" value="musarela"></li>
                           <li>Presunto<input type="checkbox" name="pizza[]" value="presunto"></li>
                           
                           <li>Bacon<input type="checkbox" name="pizza[]" value="bacon"></li>
                           <li>Quatro Queijos<input type="checkbox" name="pizza[]" value="quatro queijo"></li>
                           
                           <li>Frango<input type="checkbox" name="pizza[]" value="frango"></li>
                           <li>Calabresa<input type="checkbox" name="pizza[]" value="calabresa"></li>
                       </ol>
               
				<button name="enviar" submit> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
            
    
         
          <?php    
            
          $escolha = $_POST["pizza"] ?? [""];
          echo "<h2>Sabores da sua pizza:</h2>";
          
              
            
           if(isset($_POST["pizza"]) && count ($_POST["pizza"]) > 3){  //verifica se foi escolhido o sabor                                                                de pizza e se foi mais de 3 escolha 
           echo "Escolha Ivalida!, você Só pode ecolher 3 tipos de sabores"; 
          }
          
            else{
          foreach($escolha as $sabores){
          
          echo "<li>$sabores</li><br>";
          }
            }
          
          ?>
			
		</div>
	</div>
</body>
</html>