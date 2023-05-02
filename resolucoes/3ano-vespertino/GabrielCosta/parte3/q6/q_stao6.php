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
		<h1>RELOGIO</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="q_stao6.php" method="post">
				
				<label>Valor:
					<input type="number" name="numero" value="<?=$num?>" required>
				</label>
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Horas</h2>
           
		   <?php
           	
                $segs = $_POST["numero"] ?? 0;
                $mins = 0;
                $horas = 0;
               
                while($segs >= 60){
                    $segs -= 60;
                    $mins++;
                    if($mins >= 60){
                     $mins = 0;
                        $horas++;
                    }
                }
                echo "  {$horas}:{$mins}:{$segs}";
            
			/*
            $segundos = $_POST["numero"] ?? 0;
            $minutos = 0;
            $horas = 0;

            while($segundos < $minutos){
                $segundos -= 60;
                $mintutos++;
            }
            while($minutos <= 60){
                $minutos = 0;
                $horas++;
            }
*/
           /*
            while ($segundos > $horas){
                $segundos = $segundos - 3600;
                if($segundos > $horas){$horas++;}
            }
            
            while($segundos > $minutos){
                $segundos = $segundos + 60000;
                if($segundos > $minutos){
                $minutos++;}
            }
                echo "{$segundos}";
                echo "<br>{$horas}";
                echo " {$minutos}"; */


            ?>
		</div>
	</div>
</body>
</html>