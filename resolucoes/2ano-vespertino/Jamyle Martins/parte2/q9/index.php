<?php 
 
 $l = $_POST["clima"] ?? "";

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
		<h1>opcão de local para sair</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Clima e local</h2>
            <form action="index.php" method="post">
				<label>Qual o clima do dia::
				<select name="clima">
						<option <?=$l=="" ? "selected" : ""?>> </option>
						<option value="Ensolarado" <?=$l=="Ensolarado" ? "selected" : ""?>>Ensolarado</option>
						<option value="Ameno" <?=$l=="Ameno" ? "selected" : ""?>>Ameno</option>
                        <option value="Chouvoso" <?=$l=="Chouvoso" ? "selected" : ""?>>Chouvoso</option>
						<option value="Nublado" <?=$l=="Nublado" ? "selected" : ""?>>Nublado</option>
						<option value="Tempestade" <?=$l=="Tempestade" ? "selected" : ""?>>Tempestade</option>
												
					</select>
				</label>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			 <?php 

             $metodo = $_SERVER["REQUEST_METHOD"];

             // todo formulário começa pelo método get. Como este formulário utiliza o método post, ele só funcionará quando as informações forem enviadas, enquanto não esviadas aparece a mensagem que o formulário não foi enviado.
             if($metodo=="POST"){
             
                switch($l){
 
                    case"Ensolarado":
                       $lugar = "o Clube";
                        break;
                
                    case"Ameno":
                        $lugar = "o Parque";
                        break;
                
                    case"Chouvoso":
                       $lugar = "o Cinema";
                        break;
                
                    case"Nublado":
                        $lugar = "o Museu";
                        break;
                
                    case"Tempestade":
                        $lugar = "Ficar em casa";
                        break;
                
                        
                    default:
                        $resultado = "A opcão selecionada não é válida";
                
                 }
                 echo "<h2> com o clima {$l}, recomendamos você  {$lugar}</h2>";
                   
             }
             else{
                echo "<p>Formulário ainda não enviado</p>";
             }

             
             ?>
		</div>
	</div>
</body>
</html>
