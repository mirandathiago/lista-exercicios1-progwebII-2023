<html>
    <head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="box resposta">
            <h2>Resultado</h2>
            <?php
$linhas=$_POST['linhas'];

$linha = "*";
for($i = 0; $i < $linhas; $i++){
    echo($linha)."<br>";
    $linha .= "*";
}


?>
        </div>
</body>
    </html>



  

   
