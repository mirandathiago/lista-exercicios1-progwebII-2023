<?php
    $comp = $_POST["comp"] ?? 1;
    $larg= $_POST["larg"] ?? 1;

        /*Coelecencia Nula -> ??
        Verifica se uma variavel existe e esta setada e caso ela não exista 
        este operador retorna um valor padrão definido pelo programador. 
    
    */
    $area = $comp * $larg;
   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
		   <h1>Área calculada:</h1> 
          <div class="box resposta">
             <h3><?="A área total deste terreno é de: {$area}m²."?></h3>   
         </div>
    
</body>
</html>