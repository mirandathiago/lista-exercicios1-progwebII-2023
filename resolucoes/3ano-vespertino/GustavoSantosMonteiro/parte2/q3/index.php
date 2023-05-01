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
                <p class="subtitle">Questão 2-3</p>
              </h2>
            </div>

            <form action="index.php" method="post">
        

			<label class="none">Informe o seu nome:
					<input type="texte" name="name" required  >
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

		date_default_timezone_set('America/Sao_Paulo'); // deixa a hora no horario padrao de sao paulo

		$name = $_POST["name"] ?? 20;//recebe o nome do usuario
		$hora  = date('H');//coloca hora em uma variavel com função date

		if ($hora >= 5 && $hora <= 12) { // verifica de a hora é maior igual a5 e menor igaul a 12
			$mensagem = "Bom dia"; // mostra a mensagem da respectiva hora

		}elseif ($hora >= 13 && $hora <= 18) { // verifica de a hora é maior igual a 13 e menor igaul a 18
			$mensagem = "Boa tarde";  // mostra a mensagem da respectiva hora

		}elseif ($hora >= 19 && $hora <= 23) { // verifica de a hora é maior igual a 19 e menor igaul a 23
			$mensagem = "Boa noite";  // mostra a mensagem da respectiva hora

		}else{ // se não for nehuma das anteriories é de madrugada
			$mensagem = "Vai dormir vagabundo!";  // mostra a mensagem da respectiva hora
		}

        ?>

				<h3> Agora são :<?=date('H:i:s')?> </h3> <!-- imprime a resposta -->
				<br>
				<h3> <?=$mensagem?>,<?=$name?> </h3><!-- imprime a resposta -->




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