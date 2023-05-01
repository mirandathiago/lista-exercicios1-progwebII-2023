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
  $i;
  $a = 0;


    for($i = 1; $i <= $numero; $i++){
       $a= $a+ $i;
}
   echo"<p>Soma dos numeros de 1 até {$numero} :{$a}</p>";
?>
