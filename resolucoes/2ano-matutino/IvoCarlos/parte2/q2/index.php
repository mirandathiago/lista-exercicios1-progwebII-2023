<?php
     $metodo = ($_SERVER["REQUEST_METHOD"]);
    $consumo = $_POST["consumo"] ?? " ";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>Questão 12 - Conta de energia </h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Descubra o valor da conta de energia: </h2>
			<form action="index.php" method="post">
				<label>Consumo de energia(kWh):
					<input type="number" name="consumo"  required value="<?=$consumo?>">
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
     <div class="box resposta">
			<h2>Valor:</h2>
			<?php
                 /*
                    Até 100 kWh, o valor é de R$ 0,50 por kWh. -- 
                    De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.
                    Acima de 200 kWh, o valor é de R$ 0,87 por kWh.
                    Tarifa mínima:20,00 --- 40 kWh
                */
                if($metodo == "POST"){
                    $total = 0;
                    if($consumo <= 100 && $consumo >= 40 ){
                        $total = ($consumo * 0.50) + 20;
                    }elseif($consumo > 100 && $consumo <= 200){
                        $total = ($consumo * 0.70) + 20;
                    }else if($consumo > 200){
                        $total = ($consumo * 0.87) + 20;
                    }else{
                        $total = 20;
                    }
                     $total = number_format($total,2,);
                    echo "<div class='alerta-verde'> Valor da conta de energia: R$ {$total}</div>";
                    
                }
                
			?>
		</div>
    </div>
</body>
</html>