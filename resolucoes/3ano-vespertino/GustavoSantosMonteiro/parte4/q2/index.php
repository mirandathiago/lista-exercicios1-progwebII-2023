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
                <p class="subtitle">Questão 4-2</p>
              </h2>
            </div>

            <form action="index.php" method="post">
        
			<label>Digite nomes :
					<textarea name="pessoas" id="pessoas" rows="10" cols="25"></textarea><br>
			</label>

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

			$pessoas = $_POST["pessoas"]; // pega a string de nomes enviada pelo formulário
			$nomes = explode("\n", $pessoas); // converter a string em um array de nomes, o /n ou enter como separação

			$qnt = count($nomes); // obtem a quantidade de nomes no array
			$sorteado = rand(0, $qnt - 1); // gerar um índice aleatório no intervalo , ja que array começa em 0 e vai ate (qnt-1)

			$sortudo = $nomes[$sorteado]; // obter o nome sorteado , pelo incice que recebeu o rand

			echo "A pessoa sorteada foi: " . $sortudo; //imprime a pessoa sorteada

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