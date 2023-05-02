<html>
    <head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="box resposta">
            <h2>De acordo com o clima de hoje:</h2>

<?php 
//criamos variaveis locais para receber os dados vindo do formulario
$clima = $_POST['clima'];

switch($clima){ // define o código a ser executado com base em uma comparação de valores
 case 'ensolarado':
  echo "<p>Com o clima ensolarado, recomendamos ir ao clube</p>";
  echo "<p>Divirta-se!</p>";
  break;
 case 'ameno':
    echo "<p>Com o clima ameno, recomendamos ir ao parque</p>";
    echo "<p>Divirta-se!</p>";
  break;
 case 'chuvoso':
    echo "<p>Com o clima chuvoso, recomendamos ir ao cinema</p>";
    echo "<p>Divirta-se!</p>";
  break;
 case 'nublado':
    echo "<p>Com o clima nublado, recomendamos ir ao museu</p>";
    echo "<p>Divirta-se!</p>";
  break;
  case 'tempestuoso':
    echo "<p>Com o clima tempestuoso, recomendamos ficar em casa</p>";
    echo "<p>Não fique triste,você ainda pode ler um livro,fazer uma receita, bricar com seu pet e etc </p>";
    echo "<p>Divirta-se!</p>";
    break;
 default:
  echo "Não conheço essa!";
}
?>
        </div>
</body>
    </html>


