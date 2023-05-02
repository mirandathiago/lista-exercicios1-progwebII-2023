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
                <p class="subtitle">Questão 3-6</p>
              </h2>
            </div>

            <form action="index.php" method="post">
        
			<label>Insira o tempo em segundos :
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
        $num1 = $_POST["num1"] ?? 60; // recebe o valor
		
		$horas = floor($num1 / 3600);//uma hora tem 3600 segundos
		$minutos = floor(($num1 - ($horas * 3600)) / 60);// isola varivel horas , divide por 6 minutos , menos os segundos
		$segundos = floor($num1 % 60);//Pega o resto da divisão ou seja os segundos

        //flor  -> arrendonda os valores

        ?>

			<h3 class="reposta"> <?=$num1?> Segundos convertido em horas,minutos e segundos é : </h3>
			<h3> <?=$horas . ":" . $minutos . ":" . $segundos;?> </h3>


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