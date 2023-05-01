<?php 

$op = $_POST["selecao"] ?? '1' ;  //recebe o valor do select

switch ($op) { // testa variavel op

case "1": // caso ela seja 1
$resposta = "Com o clima ensolarado, recomendamos ir ao Clube."; // exibe a respectiva mensagem
break;

case "2":// caso ela seja 2
$resposta = "Com o clima Ameno, recomendamos ir ao Parque.";;// exibe a respectiva mensagem
break;

case "3":// caso ela seja 3
$resposta = " Com o clima Chuvoso, recomendamos ir ao Cinema.";// exibe a respectiva mensagem
break;

case "4":// caso ela seja 4
$resposta = " Com o clima Nublado, recomendamos ir ao Museu.";// exibe a respectiva mensagem
break ;

case "5":// caso ela seja 5 
$resposta = "Ta tempestuoso então fique em casa maluco .";// exibe a respectiva mensagem
break;


}
?>

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
                <p class="subtitle">Questão 2-9</p>
              </h2>
            </div>

            <form action="index.php" method="post">
        

			<label class="none">Seleção o clima do momento :
				<select name="selecao">

						<option <?= $op ==" " ? "selected" : ""?>>     </option>

						<option  <?= $op =="1" ? "selected" : ""?> value="1">Ensolarado</option>
						<option  <?= $op =="2" ? "selected" : ""?> value="2" >Ameno</option>
						<option  <?= $op =="3" ? "selected" : ""?>  value="3">Chuvoso</option>
						<option  <?= $op =="4" ? "selected" : ""?> value="4">Nublado</option>
						<option  <?= $op =="5" ? "selected" : ""?> value="5">Tempestuoso</option>			
					</select>
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



				<h3 class="reposta"> <?=$resposta?> </h3> 
			



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