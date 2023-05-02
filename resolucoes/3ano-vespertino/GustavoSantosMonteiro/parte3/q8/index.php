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
                <p class="subtitle">Questão 3-8</p>
              </h2>
            </div>

            <form action="index.php" method="post">
        
			<label class="none">Insira o número de habitantes da cidade A :
					<input type="number" name="city1" required  step="0.1" value="<?=$city1?>" >
				</label>

				<label class="none">Insira a taxa de cresesimento da cidade A em % :
					<input type="number" name="num1" required step="0.1" value="<?=$num1?>" >
				</label>

				<label class="none">Insira o  número de habitantes da cidade B :
					<input type="number" name="city2" required  step="0.1" value="<?=$city2?>" >
				</label>

				<label class="none">Insiraa taxa de cresesimento da cidade B em % :
					<input type="number" name="num2" required step="0.1"  value="<?=$num2?>" >
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

		   $city1 = $_POST["city1"] ?? 100;
		   $num1 = $_POST["num1"] ?? 2;
		   $city2 = $_POST["city2"] ?? 200; 
		   $num2 = $_POST["num2"] ?? 1; 
   
		   $anos = 0;
		   
   
				   if($city1 > $city2){
					   echo "<h3 class='reposta'>A cideade A já é maior que a cidade B</h3>" ; 
				   }elseif($num1 < $num2){
					   echo "<h3 class='reposta'>A cideade A não vai alcançar a cidade B com essa taxa de cresimento</h3>" ; 
				   }else{
					   while($city1 <= $city2 ){
   
						   $city1 *= (1 + ($num1 / 100));
						   $city2 *= (1 + ($num2 / 100));
						   $anos ++;
						   
					   }
   
				   echo	"<h2 class='reposta'> Em {$anos} anos a cidade A vai ultrapasa a cidade B </h2>";
				   echo	"<h2 class='reposta'> cidade A tera  {$city1} habitantes </h2>";
				   echo	"<h2 class='reposta'> cidade B tera  {$city2} habitantes </h2>";
   
				   }
   
   
   
				   /*
				   (Para calcular esse fator de crescimento, adicionamos 1 à taxa de crescimento 
				   que é uma porcentagem) e dividimos por 100. Isso converte a taxa de crescimento 
				   em um número decimal que pode ser usado para multiplicar a população atual e obter 
				   a nova população.
   
				   Por exemplo, se a população atual da cidade A for 1000 e a taxa de crescimento
					for 3%, o fator de crescimento será calculado da seguinte forma: *= (1+(1000/100))
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