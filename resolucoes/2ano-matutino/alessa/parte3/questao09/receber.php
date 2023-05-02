<html>
    <head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="box resposta">
            <h2>Resultado</h2>
            <?php
//criamos variaveis locais para receber os dados vindo do formulario
  $numero = $_POST['numero'];  
  $i;//variavel contadora
  $a = 0;//usamos (A) para acumular os valores assumidos pela variavel contadora  
    for($i = 1; $i <= $numero; $i++){//for vai de 1 até o numero informado
       $a= $a+ $i;
}
   echo"<p>Soma dos numeros de 1 até {$numero} : {$a}</p>";
?>
