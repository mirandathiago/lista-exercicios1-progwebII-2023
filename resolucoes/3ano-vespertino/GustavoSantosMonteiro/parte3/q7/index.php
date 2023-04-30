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
                <p class="subtitle">Questão 3-7</p>
              </h2>
            </div>

            <form action="index.php" method="post">
        
			
			<label class="none">Digite um valor em real :
					<input type="number" name="num1" required value="<?=$num1?>" >
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
       					$num1 = $_POST ["num1"] ?? 100 ;

						   $n100 = 0;
						   $n50 = 0;
						   $n20 = 0;
						   $n10 = 0;
						   $n5 = 0;
						   $n2 = 0;
						   $n1 = 0;
						   $a=0;
						   
						   
					   while ($num1 > 0) { 
							   if($num1 >= 100){
								   $n100 ++ ;
								   $num1 = $num1 - 100;
							   }elseif($num1 >= 50){
								   $n50 ++ ;
								   $num1 = $num1 - 50;
							   }elseif($num1 >= 20){
								   $n20 ++ ;
								   $num1 = $num1 - 20;
							   }elseif($num1 >= 10){
								   $n10 ++ ;
								   $num1 = $num1 - 10;
							   }elseif($num1 >= 5){
								   $n5 ++ ;
								   $num1 = $num1 - 5;
							   }elseif($num1 >= 2){
								   $n2 ++ ;
								   $num1 = $num1 - 2;
							   }elseif($num1 >= 1){
								   $n1 ++ ;
								   $num1 = $num1 - 1;
							   }
						   }
        ?>

			<h4 class="reposta"> notas de 100 - <?=$n100?> <br> <!-- imprime os valores -->
					notas de 50 - <?=$n50?> <br> 
					notas de 20 - <?=$n20?> <br>
					notas de 10 -   <?=$n10?> <br>   
					notas de 5 -   <?=$n5?> <br>
					notas de 2 -   <?=$n2?> <br>  
					notas de 1 -   <?=$n1?> <br>  </h4>


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