<?php

/* 9- Maria está planejando sair de casa, mas ela quer escolher um local adequado de acordo com o clima do dia. Para isso, ele precisa da sua ajuda para criar um formulário que permita selecionar uma das seguintes opções de clima: ensolarado, ameno, chuvoso, nublado, tempestuoso. Em seguida, utilizando a estrutura de controle switch, você deve indicar qual local é mais apropriado para cada opção de clima escolhida por João. Considere as seguintes opções de locais:

Ensolarado: Clube
Ameno: Parque
Chuvoso: Cinema
Nublado: Museu
Tempestuoso: Ficar em casa
O formulário deve permitir a seleção de uma das opções de clima através de um campo select, e o resultado deve indicar qual o local mais apropriado para sair de acordo com o clima selecionado.
Entrada: Ensolarado
Saída: Com o clima ensolarado, recomendamos ir ao Clube.

*/

$metodo = $_SERVER["REQUEST_METHOD"];

$clima = $_POST["clima"] ?? "1";

switch($clima){
    case "1":

		$clima = "Ensolarado";
        $mensagem = " ao Clube";

    break;

    case "2":

		$clima = "Ameno";
        $mensagem = " ao Parque";

    break;   

    case "3":

		$clima = "Chuvoso";
        $mensagem = " ao Cinema";

    break;   

    case "4":

		$clima = "Nublado";
        $mensagem = " ao Museu";

    break;

	case "5":

		$clima = "Tempestuoso";
        $mensagem = "Ficar em casa";

    break;
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
		<h1>Formulário de Contato</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Entre em contato</h2>

			<form action="resposta.php" method="post">

				<label>

					<select name="clima">

						<option></option>
						<option value="1">Ensolarado</option>
						<option value="2">Ameno</option>
						<option value="3">Chuvoso</option>
						<option value="4">Nublado</option>
						<option value="5">Tempestuoso</option>	

					</select>

				</label>

				<button name="enviar"> Enviar </button>

			</form>

		</div>	
		
		<div class="box resposta">
			<h2>Resultado</h2>

            <?php

                if($metodo == "POST"){
                    echo "Com o clima {$clima}, recomendamos ir {$mensagem}.";
                }else{
                    echo "<p>Aguardando Escolha</p>";
                }

            ?>
			
		</div>

	</div>

</body>
</html>