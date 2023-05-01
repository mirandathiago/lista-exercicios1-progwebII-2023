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
		<h1>Fatorial</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<form action="index.php" method="post">
                <label>
                    Entre com um número:
                    <input type="number" name="numero" required>
                </label> 
                <br>
                <button class="enviar">Enviar</button>   
            </form>

            <?php
            $metodo = $_SERVER["REQUEST_METHOD"]; 
                if($metodo == "POST"){

                    $numero = $_POST["numero"] ?? 1; // resgata o valor inserido no formulário
                    $fatorial = 1; // variavel que calcularé o fatorial  
                    
                    for($i = 1; $i <= $numero; $i++){
                            if($numero==0){
                                $fatorial = 1; // se o número recebido for = 0 o fatorial é igual a 1
                            }
                            else{
                                $fatorial = $fatorial * $i; // multiplica o valor de fatorial por i a cada incrementação
                            }
                            
                        }        
                        echo "<p class='alerta-amarelo'> O fatorial do número {$numero} é {$fatorial}</p>";    
                }    
            ?>        
		</div>
	</div>

</body>
</html>