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
                <p class="subtitle">Questão 4-3</p>
              </h2>
            </div>

            <form action="index.php" method="post">
        
			<fieldset class="none">
					<div>
				  <input type="checkbox" id="Marguerita" name="pizza[]" value="Marguerita">
				  <label for="Marguerita">Marguerita</label>
				</div>

				<div>
				  <input type="checkbox" id="Carne-seca" name="pizza[]" value="Carne-seca">
				  <label for="Carne-seca">Carne-seca</label>
				</div>

				<div>
				  <input type="checkbox" id="Quatro-queijos" name="pizza[]" value="Quatro-queijos">
				  <label for="Quatro-queijos">Quatro-queijos</label>
				</div>

				<div>
				  <input type="checkbox" id="Calabresa" name="pizza[]" value="Calabresa">
				  <label for="Calabresa">Calabresa</label>
				</div>

				<div>
				  <input type="checkbox" id="Frango-com-Catupiry" name="pizza[]" value="Frango-com-Catupiry">
				  <label for="Frango-com-Catupiry">Frango-com-Catupiry</label>
				</div>

			</fieldset>

                 <br>

                <div class="box-pulse">
                     <input type="submit" value="Sortear" class="btn-submit" Sorteio>
                </div>

            </form>

        </div>
    </div>

            <div class="resultado">

                <h2>resultado</h2> <br>

				<?php 

				 

				$pizza = $_POST["pizza"] ?? [] ;

				foreach($pizza as $pizza){
					echo "<h3 class='reposta'> você selecionou esse sabor de pizza : {$pizza}</h3>";
				}

				?>

						   

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