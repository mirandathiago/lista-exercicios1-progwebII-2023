<!DOCTYPE html>
<html lang="pt-br">

 <head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Loop Nerd" />
    <meta name="URL" content="https://www.loopnerd.com.br/artigos/css3/formulario-html-com-inputs-animado-com-css-efeito-card/"/>
    
          

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i'>
    <link rel="stylesheet" type="text/css" href="css/fonts-icones.css">
    <link rel="shortcut icon" href="css/favicon.ico" type="image/ico" />

	<title>Trabalho de WEB</title>

 </head>

<body>


<main class="main_content container">


    <div class="box-formulario">        
        
        <div class="formulario">
            
            <div class="box-title">
              <h2 class="title">Trabalho de WEB
                <p class="subtitle">Questão 2-6</p>
              </h2>
            </div>

            <form action="index.php" method="post">
        

			<label class="none">Informe o lado 1 do triangulo:
					<input type="number" name="num1" step="0.1" required value="<?=$num1?>"  >
				</label>

				<label class="none">Informe o lado 2 do triangulo:
					<input type="number" name="num2" step="0.1" required value="<?=$num2?>"  >
				</label>

				<label class="none">Informe o lado 3 do triangulo:
					<input type="number" name="num3" step="0.1" required value="<?=$num3?>"  >
				</label>

                 <br>

                <div class="box-pulse">
                     <input type="submit" value="Enviar" class="btn-submit">
                </div>

            </form>

        </div>
    </div>

            <div class="resultado">

                <h2>resultado</h2> <br>



		<?php 
			$num1=$_POST["num1"] ?? 5; // RECEBE OS LADOS
			$num2=$_POST["num2"] ?? 5; // RECEBE OS LADOS
			$num3=$_POST["num3"] ?? 5; // RECEBE OS LADOS
			$num4 = $num1 + $num2 ; // soma os 2 lados pra testar



				if(($num1 + $num2 > $num3) && ($num1 + $num3 > $num2)  // testa se a soma dos lados menores é amior que o lado
				&& ($num2 + $num3 > $num1)){							//o lado maior , faz isso 3 vezes para testar todos os lados
					

				if ($num1 == $num2 && $num2 == $num3) { // verifica se os 3 lados sao iguasi
					$repost= " É possivel formar um triangulo do tipo Equilatero";//coloca o resultado em uma unica variavel

				}elseif ($num3 == $num2 or $num3 == $num1) { // verifica se pelo menos 2 lados sao iguas 
					$repost= " É possivel formar um triangulo do tipo Isósceles";//coloca o resultado em uma unica variavel

				}else{// se tiver no minino 2 lados iguais significa que todos os lados sao diferentes
					$repost= " É possivel formar um triangulo do tipo Escaleno";//coloca o resultado em uma unica variavel
				}

				}else{//nao antende o requisito de formação de um triangulo
					$repost= "Não é possivel formar um triangulo";//coloca o resultado em uma unica variavel
				}

        ?>

				<h3 class="reposta"> <?=$repost?> </h3><!-- imprime a resposta -->
			



            </div>
   

</main>

<footer class="main_footer container">
    <div class="main_footer_copy">

        <p class="m-b-footer"> Loop Nerd - 2023, todos os direitos reservados.</p> 
        <p class="by"><i class="icon icon-heart-3"></i> Desenvolvido por: <a href="https://www.loopnerd.com.br/templates-html" title="Templates Html" target="_blank">loopnerd.com.br</a></p>
        <P class="by"> Customizado por <strong> Gutto </strong> <i class="icon icon-heart-3"></i> </P>
    </div>
</footer>


</body>



</html>