<html>
    <head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="box resposta">
            <h2>Resultado</h2>
            <?php
  if(isset($_POST['frutas'])){
    $frutas_selecionadas = $_POST['frutas'];
    
    echo "<p>Frutas selecionadas:</p>";
    foreach($frutas_selecionadas as $fruta){
      echo " <p>  {$fruta} </p>" ;
    }
  }
/* O código acima verifica se a variável $_POST['frutas'] foi definida e, em caso afirmativo, armazena as frutas selecionadas na variável $frutas_selecionadas. Em seguida, o comando foreach é utilizado para percorrer as frutas selecionadas e exibi-las na tela */
 /* Este formulário envia as frutas selecionadas para um arquivo php. Neste arquivo PHP, podemos utilizar o comando foreach para processar as frutas selecionadas e apresentá-las ao usuário */
 
/* A base de todos os programas foram dos documentos(php,html e css)usados em sala de aula */
?>
        </div>
</body>
    </html>








