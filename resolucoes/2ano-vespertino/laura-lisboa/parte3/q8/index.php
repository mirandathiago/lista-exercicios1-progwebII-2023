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
		<h1>Calculo do número de habitantes</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<form action="index.php" method="post">
                <label>
                    Entre com o número atual de habitantes:
                    <input type="number" name="num" required>
                </label> 
                <br>
                <label>
                    Entre com a taxa de crescimento:
                    <input type="number" name="taxaA" step="0.1" required>
                </label>
                <br>
                <label>
                    Entre com o número atual de habitantes da outra cidade:
                    <input type="number" name="num2" required>
                </label> 
                <br>
                <label>
                    Entre com a taxa de crescimento da outra cidade:
                    <input type="number" name="taxaB" step="0.1" required>
                </label>
                <br>
                <button class="enviar">Enviar</button>   
            </form>

            <?php
            $metodo = $_SERVER["REQUEST_METHOD"]; 
                if($metodo == "POST"){

                        $populacaoA = $_POST["num"] ?? 1; // recupera os valores do formulário
                        $taxaA = $_POST["taxaA"] ?? 0;
                        $populacaoB = $_POST["num2"] ?? 1; // recupera os valores do formulário
                        $taxaB = $_POST["taxaB"] ?? 0;
                        // coverte para porcentagem
                        $taxahabiA = $taxaA / 100; 
                        $taxahabiB = $taxaB / 100;
                        // calcula a o crescimento da populacao
                        $anos = 0;

                        if($populacaoA > $populacaoB){
                            $mensagem = "A cidade 'A' tem mais habitantes que a cidade 'B' ";
                        } 
                        else if($taxahabiA < $taxahabiB){
                            echo "<p>A cidade A não alcançará o número de habitantes da cidade B com essa taxa de crescimento</p>";
                        }
                        else{
                            // vai ir acrescentando o número de habitantes e acumulando de 1 em 1 os anos
                            while($populacaoA <= $populacaoB){
                                $populacaoA = $populacaoA * (1+$taxahabiA);
                                $populacaoB = $populacaoB * (1+$taxahabiB);
                                //echo  $populacaoA . "<br>";
                                //echo  $populacaoB . "<br>";
                                $anos++;
                            }
                        }
                        echo "<p class='alerta-verde'>Serâo necessários {$anos} anos para que a população da cidade A ultrapasse a da 
                        cidade B</p>";
                }    
            ?>        
		</div>
	</div>

</body>
</html>