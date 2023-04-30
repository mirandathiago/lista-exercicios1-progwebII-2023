<?php
/*1- crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura 
condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.
Entrada: 2 5 1
Saída: Menor Número: 1 e o Maior Número: 5
*/
    $n1 = $_GET["n1"] ?? 0; 
    $n2 = $_GET["n2"] ?? 0; 
    $n3 = $_GET["n3"] ?? 0; 
    $maior = $n1;
    $menor = $n1;
   
    if($n2 > $maior){ 									//se n2 for maior que maior, o valor de maior se atualiza, sendo agora n2
		$maior = $n2;
	}elseif($n2 < $menor){								//se n2 for menor que menor, o valor de menor se atualiza, sendo agora n2
		$menor = $n2;
	}
														//supondo que o valor de maior ou menor se atualizaram, agora é n2
	if($n3 > $maior){									 //se n3 for maior que maior(supondo que seja n2), atualiza maior
		$maior = $n3;
	}elseif($n3 < $menor){ 								// se n3 for menor que menor(supondo que seja n2) atualiza menor 
		$menor = $n3;
	}
														// lembrando que n1 pode continuar sendo maior ou menor se alguma das alternativas não forem verdadeiras
    

?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Maior e menor</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Maior e Menor</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Achando o maior e menor número</h2>
			<form action = "index.php" method = "get">				
				<label>Informe um número:
					<input type="number" name="n1" required value = "<?=$n1?>">
				</label>
				<label>Informe outro número:
					<input type="number" name="n2" required value = "<?=$n2?>">
				</label>
                <label>Informe mais um número:
					<input type="number" name="n3" required value = "<?=$n3?>">
				</label>		
				<button name = "botao"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
            <?php 
            echo "<p>O maior número é {$maior} e o menor número é {$menor}</p>";
            ?>
					
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
