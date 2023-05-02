<?php
    $n1 =  $_POST["n1"] ?? 0; 
    $n2 =  $_POST["n2"] ?? 0;
    $n3 =  $_POST["n3"] ?? 0;

    $mens = "";
    $mens2 = "";

if($n1 > $n2 && $n1 > $n3){
    $mens = "Maior número: {$n1}";
}elseif($n2 > $n3){
    $mens = "Maior número: {$n2}";
}else{
    $mens = "Maior número: {$n3}";
}



if($n1 < $n2 && $n1 < $n3){
    $mens2 = "Menor número: {$n1}";
}elseif($n2 < $n3){
    $mens2 = "Menor número: {$n2}";
}else{
    $mens2 = "Menor número: {$n3}";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>questao1</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<form action="quest1.php" method="post">
			<h1>Número maior e Número menor:</h1>
            <label >Numero 1:
                <input type="number" name="n1">
            </label>
            <label>Numero 2:
                <input type="number" name="n2">
            </label>
            <label>Numero 3:
                <input type="number" name="n3">
            </label>
			
			<button>Mostrar</button>
		</form>
	</div>
	<div class="box resposta">
			<h2>Maior e Menor</h2>
            <br>
        	<?= "<h3>{$mens}<br></h4>"?>
        	<?= "<h3>{$mens2}<br></h4>"?>
			<a href="exemplo1.php" class="link">Voltar</a>
		</div>	
</body>
</html>