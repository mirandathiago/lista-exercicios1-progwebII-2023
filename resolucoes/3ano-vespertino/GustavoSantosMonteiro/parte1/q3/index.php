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
                <p class="subtitle">Questão 1-3</p>
              </h2>
            </div>

    
                                
                                <form action="index.php" method="post">

                    <label class="none">  Nota da prova 1:
                        <input type="number" name="num1" required  step="0.1" value="<?=$num1?>" >
                    </label>

                    <label class="none">Nota da prova 2:
                        <input type="number" name="num2" required  step="0.1" value="<?=$num2?>">
                    </label>

                    <label class="none" >Nota da prova 3:
                        <input type="number" name="num3" required  step="0.1" value="<?=$num3?>">
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

                $num1 = $_POST["num1"] ?? 1; // recebe o valor
                $num2 = $_POST["num2"] ?? 1; // recebe o valor
                $num3 = $_POST["num3"] ?? 1; // recebe o valor

                $nota1 = (2/10) * $num1;  // transforma de media ponderada para somatoria 
                $nota2 = (3/10) * $num2;  // transforma de media ponderada para somatoria 
                $nota3 = (5/10) * $num3;  // transforma de media ponderada para somatoria 

                $media = ($nota1 + $nota2 + $nota3) ; // soma e descobre a media 

                ?>

                <h3 class="reposta"> Nota da primeira prova : <?=$nota1?> </h3>  <!-- imprime a resposta-->
                <h3 class="reposta"> Nota da segunda prova : <?=$nota2?> </h3> <!-- imprime a resposta-->
                <h3 class="reposta"> Nota da terceira prova : <?=$nota3?> </h3> <!-- imprime a resposta-->
                <br>
                <h3 class="reposta"> Media final :<?=$media?> </h3>
    

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