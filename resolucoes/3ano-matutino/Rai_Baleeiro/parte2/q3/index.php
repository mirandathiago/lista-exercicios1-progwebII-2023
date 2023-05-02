<?php
    $nome = $_POST["neme"];

    $hour = date("h");

    if(5 <= $hour && $hour <= 12){
        $saud = "Bom dia";
    }elseif(13 <= $hour && $hour <= 18){
        $saud = "Boa tarde";
    }elseif(19 <= $hour && $hour <= 23){
        $saud = "Boa noite";
    }else{
        $saud = "Vá dormir, está de madrugada";
    }

    $mens = "{$saud},{$nome}";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista de Atividades</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Atividade 3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Bom dia/tarde/noite</h2>
			<form action="index.php" method="post">
				<label>Nome:
                    <br>
					<input type="string" name="neme" value="<?=$nome?>" required>
				</label>
                <br>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor com Desconto</h2>

            <?php
                //var_dump($_SERVER["REQUEST_METHOD"]);
                $met = $_SERVER["REQUEST_METHOD"];

                echo"<p>{$hour}</p>";

                if($met == "POST"){
                    echo"<p>{$mens}</p>";
                }else{
                    echo"<p>Não é possivel efetuar a operação, por favor verifique o formulário de envio</p>";
                }
            
            ?>
			
		</div>
	</div>
</body>
</html>