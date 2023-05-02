
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="box resposta">
            <h2>Resultado</h2>
            <?php 
//criamos variaveis locais para receber os dados vindo do formulario 
//Inicialmente, dizemos que o menor valor é o primeiro, o valor do meio é o segundo número e o maior número é o terceiro digitado
//numero 1 = Menor
//numero 2 = Meio
//numero 3 = Maior 
  $menor = $_POST['numero1'];
  $meio = $_POST['numero2'];
  $maior = $_POST['numero3'];
//estrutura condiciona IF analisa as variáveis duas a duas
// se expressão do if não for verdadeira invertermos as variáveis
  if($meio < $menor){
   $temp=$menor;//temp variavel auxiliar 
   $menor=$meio; // = diferente de ==
   $meio=$temp;
  }
  if($maior < $menor){
   $temp=$menor;
   $menor=$maior;
   $maior=$temp;
  }
  
  if($maior < $meio){
   $temp=$meio;
   $meio=$maior;
   $maior=$temp;
  }
  echo "<p>Menor Número: {$menor}</p>";
  echo "<p>Maior Número: {$maior}</p>";
 ?>
        </div>
</body>
    </html>

