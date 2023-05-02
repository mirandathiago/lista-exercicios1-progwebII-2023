<html>
    <head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="box resposta">
            <h2>De acordo com o numero do dia informado:</h2>


<?php
//criamos variaveis locais para receber os dados vindo do formulario
$dia = $_POST['dia'];


switch($dia){
 case 'domingo':
    echo "<p>Você informou o dia {$dia}</p>";
  echo "<p>{$dia} é final de semana</p>";
  break;
 case 'segunda-feira':
    echo "<p>Você informou o dia {$dia}</p>";
    echo "<p> {$dia} é um dia útil.</p>";
  break;
 case 'terca-feira':
    echo "<p>Você informou o dia {$dia}</p>";
    echo "<p>O {$dia} é um dia útil.</p>";
  break;
 case 'quarta-feira':
    echo "<p>Você informou o dia {$dia}</p>";
    echo "<p>O {$dia} é um dia útil.</p>";
  break;
  case 'quinta-feira':
    echo "<p>Você informou o dia {$dia}</p>";
    echo "<p>O {$dia} é um dia útil.</p>";
    break;
    case 'sexta-feira':
     echo "<p>Você informou o dia {$dia}</p>";
    echo "<p>O {$dia} é um dia útil.</p>";
        break;
        case 'sabado':
            echo "<p>Você informou o dia {$dia}</p>";
            echo "<p>{$dia} é final de semana</p>";
            break;
 default:
  echo "Invalido!";
}
?>
        </div>
</body>
    </html>
