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
                <p class="subtitle">Questão 2-2</p>
              </h2>
            </div>

            <form action="index.php" method="post">
        

			<label class="none">consumo de energia elétrica :
					<input type="number" name="num1" required step="0.1"  >
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

			$num1 = $_POST["num1"] ?? 20; //recebe o consumo de energia 
							
			if ($num1 > 20 && $num1 <= 100) { //testa o preço se for maior que 20 e  menor igual a 100
				$calculo = $num1 * 0.50; // calcula o valor dependedo da faixa de consumo
				$calculo += 20;// tarifa minima 

			}elseif ($num1 >= 101 && $num1 <=200) { //testa o preço se for maior que 101 e  menor igual a 200
				$calculo = $num1 * 0.70; // calcula o valor dependedo da faixa de consumo
				$calculo += 20;// tarifa minima 

			}elseif ($num1 > 200) { // testa se preço for maior que 200
				$calculo = $num1 * 0.87; // calcula o valor dependedo da faixa de consumo
				$calculo += 20;// tarifa minima 

			}else{ // tarifa minima para consumo baixo
				$calculo = 20;}


        ?>

			<h3 class="reposta">consumo de energia elétrica : <?=$num1?>KW/H</h3> <!-- imprime a resposta-->
			<br>
			<h3 class="reposta"> valor a ser pago  :<?=$calculo?> </h3><!-- imprime a resposta-->



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