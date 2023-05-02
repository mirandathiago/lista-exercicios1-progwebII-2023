<?php 

/*
	4- Crie um formulário em PHP para calcular as raízes de uma equação de segundo grau utilizando a fórmula de Bhaskara. O formulário deverá ter três campos numéricos (que podem ser positivos ou negativos): A, B e C, que correspondem aos coeficientes da equação. Ao clicar no botão "Calcular", o script deverá validar se os campos foram preenchidos e se os valores informados são números. Se algum dos campos estiver vazio ou com um valor inválido, o script deverá exibir uma mensagem de erro. Caso contrário, o script deverá calcular as raízes da equação de segundo grau utilizando a fórmula de Bhaskara e exibir os resultados.
	Exemplo de entrada:
	A = 2
	B = 5
	C = -3
	Exemplo de saída:
	As raízes da equação de segundo grau são: x1 = 0.5 e x2 = -3.
	Lembre-se que a fórmula de Bhaskara é dada por:

	Sendo que:

	E os parâmetros a serem utilizados na estrutura condicional são:
	Se o delta for menor que 0, a equação não possui raízes reais. Deve ser exibida esta mensagem.
	Se o delta for igual a 0, a equação possui uma única raiz real. Deve ser exibida a raiz real e a informação que a equação só possui uma raiz.
	Se o delta for maior que 0, a equação possui duas raízes reais. Deve ser exibida as duas raízes da equação.
*/


    $a = $_POST["num1"] ?? 0;
	$b = $_POST["num2"] ?? 0;
	$c = $_POST["num3"] ?? 0;
	


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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Saudação</h2>
			<form action="index.php" method="post">
                <label>
                    Insira o valor de A:
                        <input type="text" id="num1" name="num1" value="<?=$a?>" required >
                </label>
				<label>
                    Insira o valor de B:
                        <input type="text" id="num2" name="num2" value="<?=$b?>" required >
                </label>
				<label>
                    Insira o valor de C:
                        <input type="text" id="num3" name="num3" value="<?=$c?>" required >
                </label>



				<button name="enviar"> Calcular </button>

                
			</form>
		</div>
		<div class="box resposta">
		<?php 
						
						
			if(empty($a) && empty($b) && empty($c)){
				$mensagem = "ERRO UM OU MAIS CAMPOS ESTÃO VAZIOS";
			}else if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
					$delta = pow($b, 2) - (4 * $a * $c);
					if($delta < 0){
						$mensagem = "A equação não possuí raízes reais.";
					}else if($delta == 0){
						$x = -$b / (2 * $a);
						$mensagem = "Equação possui uma única raiz real que é {$x}";
					} else {
						$x1 = (-($b) + sqrt($delta)) / (2 * $a);
						$x2 = (-$b - sqrt($delta)) / (2 * $a);   
						$mensagem = "A equação possui duas raízes reais que são {$x1} e {$x2}";
					} 
							
			}else {
				$mensagem = "ERRO INSIRA APENAS NÚMEROS";
			}
		?>

		<h1>Cálculo de Baskhara</h1>

		<h4><?=$mensagem?></h4>
		</div>
	</div>
</body>
</html>