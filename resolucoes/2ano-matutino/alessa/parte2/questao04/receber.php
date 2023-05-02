<html>
    <head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="box resposta">
            <h2>Resultado</h2>
            <?php
//criamos variaveis locais para receber os dados vindo do formulario
  $peso = $_POST['peso'];
  $altura = $_POST['altura'];
  $imc = $peso/($altura**2);
echo "<br />";
echo "<p>Seu IMC é {$imc}</p>";
//estutura condicional if e else analisa se as informações são verdadeiras ou não 
if( $imc < 18.5 ) {
    echo "<br/>";
    echo "<p>Você está na faixa abaixo do peso</p>";
} elseif ( $imc >= 18.5 && $imc <= 24.9 ) {
    echo "<br/>";
    echo "<p>Você está na faixa de peso normal</p>";
} elseif ( $imc >= 25 && $imc <= 29.9 ) {
    echo "<br/>";
    echo "<p>Você está na faixa de sobrepeso</p>";
} elseif ( $imc >= 30 && $imc <= 34.9 ){
    echo "<br/>";
    echo "<p>Você está na faixa de obesidade grau 1</p>";
} elseif ( $imc >= 35 && $imc <= 39.9 ){
    echo "<br/>";
    echo "<p>Você está na faixa de obesidade grau 2</p>";
}else{
    echo "<br/>";
    echo "<p>Você está na faixa de obesidade grau 3</p>";
}
?>