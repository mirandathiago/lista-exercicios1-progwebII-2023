<!DOCTYPE>
<html lang="pt-br">
    <head>
        <title>Questão 1</title>
        <meta charset="utf-8">	<link rel="stylesheet" type="text/css" href="estilo.css">

    </head>
    <body><div class="container">
		<div class="box formulario">
        <form action="q1.php" method="post">
            <label>Maçã
                <input type="checkbox" name="frutas[]" value="Maçã">
            </label><br>
             <label>Uva
                <input type="checkbox" name="frutas[]" value="Uva">
            </label><br>
        
             <label>Abacaxi
                <input type="checkbox" name="frutas[]" value="Abacaxi">
            </label><br>
        
             <label>Melancia
                <input type="checkbox" name="frutas[]" value="Melancia">
            </label><br>
        
             <label>Laranja
                <input type="checkbox" name="frutas[]" value="Laranja">
            </label><br>
            <button>Enviar</button>
            </form></div></div>
        <?php
            if(isset($_POST['frutas'])){
			$frutas = $_POST['frutas'];
			foreach ($frutas as $fruta) {
				echo "<p class='alerta-verde'>$fruta</p>";
			}
		} else {
			echo "<p class='alerta-vermelho'>Nenhum sabor foi selecionado.</p>";
		}
        
        ?>
    </body>
</html>