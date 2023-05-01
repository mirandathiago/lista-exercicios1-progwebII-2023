<?php
    $metodo = $_SERVER["REQUEST_METHOD"];
    $nome = $_POST["nome"] ?? "";
    $altura = $_POST["altura"] ?? 1.6;
    $peso = $_POST["peso"] ?? 60;
    $idade = $_POST["idade"] ?? 14;
    $sexo = $_POST["sexo"] ?? "F";
    $sx = $_POST["sx"] ?? "1";
    $tmb = $_POST["tmb"] ?? "";
    
    
    

    //Para homens: TMB = 88,36 + (13,4 x peso em kg) + (4,8 x altura em cm) - (5,7 x idade em anos)
    //Para mulheres: TMB = 447,6 + (9,2 x peso em kg) + (3,1 x altura em cm) - (4,3 x idade em anos)


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="container">
		<form action="questao7.php" method="post">
            <h1>Taxa de Metabolismo Basal</h1>

            <label>Nome:
                <input type="text" name="nome">
            </label>

            <label>Altura:
                <input type="number" name="altura"
                step="0.1" value="1.6">
            </label>

            <label>Peso:
                <input type="number" name="peso"
                step="0.1" value="60">
            </label>

            <label>Idade:
                <input type="number" name="idade">
            </label>
            
            <label>Sexo:
				<select name="sx">
						<option <?=$sx == "" ? "selected" : "" ?>></option>
						<option <?=$sx == "1" ? "selected" : "" ?> value="1">Masculino</option>
						<option <?=$sx == "2" ? "selected" : "" ?> value="2">Feminino</option>
					</select>
				</label>

            <br>
            
            <button name="Calcular">Calcular</button>
		</form>
	</div>
    <?php

switch($sx){
    case "1":
        $tmb = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $idade);
        $mensagem = "{$nome} a sua taxa de metabolismo basal é de aproximadamente {$tmb} por dia.";
       
        break;
    case "2":
        $tmb = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $idade);
        $mensagem = "{$nome} a sua taxa de metabolismo basal é de aproximadamente {$tmb} por dia.";
        
    break;
}



        if($metodo == "POST"){
            echo "<p>{$mensagem}</p>";
        }else{
            echo"<p>Aguardando informações...</p>";
        }
        
    ?>
    
</body>
</html>