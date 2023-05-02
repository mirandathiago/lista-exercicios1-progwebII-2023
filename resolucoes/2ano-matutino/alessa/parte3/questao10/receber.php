<html>
    <head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="box resposta">
            <h2>Resultado</h2>
            <?php
//criamos variaveis locais para receber os dados vindo do formulario

if(isset($_POST['submit'])){
  $inicio = $_POST['inicio'];
  $fim = $_POST['fim'];
  $cont = 0;
  for($i=$inicio;$i<$fim;$i++){
    if($i % 2 == 0){
      $cont++;
    }
  }
  echo "Quantidade de números pares:<br> {$cont}";
}
/* A base de todos os programas foram dos documentos(php,html e css)usados em sala de aula */

?>
</body>

