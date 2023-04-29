<?php

    /*
    6- Desenvolva um formulário em PHP que permita ao usuário inserir os valores dos três 
    lados de um triângulo. O programa deve verificar se é possível formar um triângulo com os valores informados e, 
    caso seja possível, indicar o tipo de triângulo formado.

    Para que seja possível formar um triângulo, a soma dos dois lados menores deve ser maior que o lado maior. 
    Caso contrário, não é possível formar um triângulo.
    Após a verificação, o programa deve indicar o tipo de triângulo formado, baseado nos valores informados, 
    utilizando a seguinte lógica:

    Equilátero: triângulo com três lados iguais;
    Isósceles: triângulo com dois lados iguais;
    Escaleno: triângulo com todos os lados diferentes.
    */

    $lado1 = $_POST["lado1"] ?? 0;
    $lado2 = $_POST["lado2"] ?? 0;
    $lado3 = $_POST["lado3"] ?? 0;

    // Verifica se é possível formar um triângulo com os valores informados
    if (($lado1 + $lado2) > $lado3 && ($lado1 + $lado3) > $lado2 && ($lado2 + $lado3) > $lado1) {

        
        if ($lado1 == $lado2 && $lado2 == $lado3)  {// Verifica o tipo de triângulo

            $msg = "<p class='alerta-verde'>É possível formar um triângulo Equilátero.</p>";

        } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {

            $msg =  "<p class='alerta-verde'>É possível formar um triângulo Isósceles.</p>";

        } else {

            $msg = "<p class='alerta-verde'>É possível formar um triângulo Escaleno.</p>";

        }

    } 
    else {

        $msg = "<p class='alerta-vermelho'>Não é possível formar um triângulo com os valores informados.</p>";

    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 6</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<h1>Triângulos</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Digite o número dos lados do triângulo</h2>
			<form action="index.php" method="post">

				<label>Digite o valor do primeiro lado:
                <input type="number" name="lado1" min=1 required value="<?=$lado1?>"> 
				</label>

                <label>Digite o valor do segundo lado:
                <input type="number" name="lado2" min=1 required value="<?=$lado2?>"> 
				</label>
                
                <label>Digite o valor do terceiro lado:
                <input type="number" name="lado3" min=1 required value="<?=$lado3?>"> 
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>

        <div class="box resposta">
			<h2>Resultado</h2>
			<?php

                $metodo = $_SERVER["REQUEST_METHOD"]; //  dados do servidopr e da requisição que está ocorrendo no momento.

                if($metodo == "POST"){ // verifica se o metodo é post e imrpime a mensagem na tela

                    echo $msg; // imprime a mensagem (saída)

                }
                else{ // se não for post, é pq aguarda o envio do formulário

                    echo "<p class='alerta-amarelo'>AGUARDANDO O ENVIO DO FORMULÁRIO</p>"; // mesnagem de aguardo ao envio do formulário

                }

            ?>
		</div>		
	</div>
</body>
</html>
