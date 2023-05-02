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
  $count=1;
  echo "<br /><h2>A tabuada de {$numero} é:</h2><br />";
  while($count<=10){
   echo $numero." x ".$count." = ".($numero*$count)."<br />";
   $count++;
  }
?>
