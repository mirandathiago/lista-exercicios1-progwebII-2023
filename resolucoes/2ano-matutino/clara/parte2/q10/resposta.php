<?php
    $dia =  $_POST["dia"] ?? "";
    $mensagem = "";


    switch ($dia) {
        case '1':
            $mensagem = "O domingo é final de semana.";
            break;
            case '2':
                $mensagem = "A segunda-feira é um dia útil.";
                break;
                case '3':
                    $mensagem = "A terça-feira é um dia útil.";
                    break;
                    case '4':
                        $mensagem = "A quarta-feira é um dia útil.";
                        break;
                        case '5':
                            $mensagem = "A quinta-feira é um dia útil.";
                            break;
                            case '6':
                                $mensagem = "A sexta-feira é um dia útil.";
                                break;
                                case '7':
                                    $mensagem = "O sabado é final de semana.";
                                    break;
        default:
        $mensagem = "INVÁLIDO";
            break;
    }


?>
<!DOCTYPE html>
<html>
<head>
<title>Atividade da lista</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
        <h1>RESPOSTA</h1>
        <?= "<h4>{$mensagem}<br></h4>"?>
        
	</div>
</body>
</html>