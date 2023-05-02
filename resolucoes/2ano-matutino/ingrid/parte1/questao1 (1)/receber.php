<html>
    <head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="box resposta">
			<h2>Resultado</h2>
            <br>
			<?php
            //Criamos variaveis locais para receber os dados vindos do formulario 
$inicial=$_POST['inicial'];
$desconto = $_POST['desconto'];
$operacao = $inicial - ($inicial / 100 * $desconto);
echo "<p>Preço em reais com desconto: R$ {$operacao} </p>";
?>
		</div>
</body>
    </html>