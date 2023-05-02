<?php
//var_dump($_SERVER["REQUEST_METHOD"]);
                
$metodo = $_SERVER["REQUEST_METHOD"];

 $a = $_POST["a"] ?? 0;
 $b = $_POST["b"] ?? 0;
 $c = $_POST["c"] ?? 0;
 $x1 = 0;
 $x2 = 0;

    
    if($a != 0){
        $delta = $b**2 - (4*$a*$c);
        if($delta > 0){
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
        }elseif($delta == 0){
            echo "A equação possui uma única raiz real";
            $x1 = $x2 = -($b)/(2*$a);
       }elseif($delta < 0){
            echo "<p>A equação não possui raízes reais.</p>";
       }
    }
 
 $mensagem = "As raízes da equação de segundo grau são: {$x1} e {$x2}";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
		<h1>Raízes de uma equação de segundo grau</h1>
	</header>

	<div class="container">
		<div class="box formulario">
			<h2>Raizes de uma Equação</h2>

			<form action="questao4.php" method="post">
				<label>Coeficiente A:
					<input type="number" name="a" required value="<?=$a?>">
				</label>
				<label>Coeficiente B:
					<input type="number" name="b" required value="<?=$b?>">
				</label>
                <label>Coeficiente C:
					<input type="number" name="c" required value="<?=$c?>">
				</label>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>

        <div class="box resposta">
			<h2>Resultado</h2>
			
            <?php 
                if($metodo == "POST"){
                    echo "<p>{$mensagem}</p>";
                }else{
                    echo"<p>Aguardando informações...</p>";
                }
               
            
            ?>
		</div>
	</div>
</body>
</html>