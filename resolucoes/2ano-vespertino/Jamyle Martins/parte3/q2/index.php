<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Tabuada</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<form action="index.php" method="post">
                <label>
                    Entre com um número:
                    <input type="number" name="num" required>
                </label> 
                <br>
                <button class="enviar">Enviar</button>   
            </form>

            <?php
            $metodo = $_SERVER["REQUEST_METHOD"]; 
                if($metodo == "POST"){

                    $num = $_POST["num"] ?? 1; // variavel que vai receber o valor do fomulario
                    $i = 1;
                
                        echo "<h3 class='alerta-amarelo'> A tabuada do número {$num} é: <br>";
                        
                        while($i <= 10){
                            $resul = $num * $i;

                            echo "{$num} x {$i} = {$resul}<br>";
                            $i++;
                        }
                        echo "</h3>";
                }    
            ?>        
		</div>
	</div>

</body>
</html>