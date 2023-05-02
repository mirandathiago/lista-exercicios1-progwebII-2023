<?php 
    /*
    
    
    2- Crie um formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número.
    Entrada: 4
    Saída: Dobro: 8 e Metade: 2 
    
    
    */
    
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
	<div class="container">
    <form action="resposta.php" method="post">
            <h1></h1>
            <label>
                    INSIRA UM NÚMERO:
                    <input type="number" name="num1" value="" min="1">
            </label>
            <button>Calcular</button>
		</div>
	
</body>
</html>