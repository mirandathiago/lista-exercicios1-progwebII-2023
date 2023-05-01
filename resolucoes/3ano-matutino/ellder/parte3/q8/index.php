<?php
	
	$cit1 = $_POST["numero"] ?? 0;
	$taxa1 = $_POST["taxa1"] ?? 0;
    $cit2 = $_POST["numero2"] ?? 0;
    $taxa2 = $_POST["taxa2"] ?? 0;

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
		<h1>Estruturas De Repetição</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira os Valores:</h2>
			<form  action="index.php" method="post">
				
				<label>Número de habitantes da primeira cidade:
					<input type="number" name="numero" required value= "<?=$cit1?>">
				</label>
                <br>
				<label>Taxa anual de crescimento da primeira cidade (%):
                    <br>
					<input type="float" name="taxa1" required value= "<?=$taxa1?>">
				</label>
                <br>
                <br>
                <label>Número de habitantes da segunda cidade:
					<input type="number" name="numero2" required value= "<?=$cit2?>">
				</label>
                <br><br>
				<label>Taxa anual de crescimento da segunda cidade (%):
                    <br>
					<input type="float" name="taxa2" required value= "<?=$taxa2?>">
				</label>
				<br>
                
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2> Resposta:</h2>
			
            <?php 
                
                
                 if($cit1 > $cit2){
                    echo "A primeira cidade ja tem mais habitantes que a segunda cidade";
                }elseif($taxa1 <= $taxa2){
                    echo "A primeira cidade não alcançará o número de habitantes da segunda cidade com essa taxa de crescimento";
                }else{
                        $anos = 0;
                        while($cit1 < $cit2){
                            $cit1 += ($cit1 * $taxa1 / 100);
                            $cit2 += ($cit2 * $taxa2 / 100);
                            $anos++;
                        }

                    echo "Serão necessarios {$anos} anos para que a população da primeira cidade ultrapasse a da segunda cidade";
                }
            



            ?>
		</div>
	</div>
</body>
</html>