
<?php
$dia = $_POST["dia"] ?? "";

switch($dia){
	case "1":
		$dasemana = "Domingo é final de semana";
	break; 
	case "2":
		$dasemana ="Segunda é dia útil";
	break;
	case "3":
		$dasemana ="Terça é dia útil";
	break;
	case "4";
        $dasemana = "Quarta é dia útil";
	break;
	case "5":
		$dasemana = "Quinta é dia útil";
	break;
	case "6":
		$dasemana = "Sexta é dia útil";
	break;
    case "7":
        $dasemana ="Sábado é final de semana";
    break;
	default:
	$resultado = "Operação Inválida";


}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>DIA DA SEMANA</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="q_stao10.php" method="post">
				
				
				<label>Operação:
				<select name="dia">
						<option <?=$dia=="" ? "selected" : "" ?>></option>
						
						<option <?=$dia=="1" ? "selected" : "" ?> value="1">Domingo</option>
						<option <?=$dia=="2" ? "selected" : "" ?> value="2">Segunda</option>
						<option <?=$dia=="3" ? "selected" : "" ?> value="3">Terça</option>
						<option <?=$dia=="4" ? "selected" : "" ?> value="4">Quarta</option>
						<option <?=$dia=="5" ? "selected" : "" ?> value="5">Quinta</option>
						<option <?=$dia=="6" ? "selected" : "" ?> value="6">Sexta</option>
                        <option <?=$dia=="7" ? "selected" : "" ?> value="7">Sábado</option>						
					</select>
				</label>	
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
           
            <?php 
			
			/*var_dump($_POST);
			echo "<hr>";
			var_dump($_SERVER["REQUEST_METHOD"]); */

			$metodo = $_SERVER["REQUEST_METHOD"];
			
			if($dia == ""){
                echo "<p class='alerta-amarelo'>Aguardando os dados do Formulário</p>";
				
			}else{
				echo "<p class= 'alerta-verde'>{$dasemana} </p>";
			}
		
			?>
		</div>
	</div>
</body>
</html>