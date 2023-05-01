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
                <p class="subtitle">Questão 1-4</p>
              </h2>
            </div>

            <form action="index.php" method="post">
        

				<label  class="none" >Distancia a ser percorrida:
					<input type="number" name="num1" required step="0.1" >
				</label>

				<label  class="none" >Consumo medio:
					<input type="number" name="num2" required step="0.1">
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

					$num1 = $_POST["num1"] ?? 100; // recebe o valor
					$num2 = $_POST["num2"] ?? 10; // recebe o valor


					$calculo = $num1/$num2 ; // divide a distancia pelo consumo


                ?>

			<h3 class="reposta"> Distância a percorrer : <?=$num1?>KM </h3> <!-- imprime a resposta-->
			<h3 class="reposta"> Consumo médio de combustível : <?=$num2?>KM/L </h3><!-- imprime a resposta-->
			<br>
			<h3 class="reposta">Quantidade de combustível necessária :<?=$calculo?>L</h3><!-- imprime a resposta-->

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