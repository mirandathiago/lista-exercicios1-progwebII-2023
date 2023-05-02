<html>
    <head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="box resposta">
            <h2>Resultado</h2>
            <br>
            <?php
$num=$_POST['num'];
$dobro = $num * 2 ;
$metade = $num / 2 ; 
echo "<p>O dobro de {$num} é {$dobro} e a metade é {$metade} </p>";
?>
        </div>
</body>
    </html>
