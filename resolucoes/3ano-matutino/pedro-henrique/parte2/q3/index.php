<!-- Crie um formulário que solicite o nome de uma pessoa e ao ser enviado faça uma saudação a esta pessoa dando bom dia, boa tarde ou boa noite de acordo com o horário do dia em que o programa está sendo executado.
Para saber a hora do dia você poderá utilizar a função date do PHP passando como parâmetro a string “H” que retorna a hora atual no formato 24 horas. 
de 05 até 12h deve ser dado Bom dia
de 13h até 18h deve ser dado Boa Tarde
de 18h até 23h deve ser dado Boa Noite
de 00h até 04h deve ser exibida a mensagem: Vá Dormir, está de Madrugada.
Entrada: João
Saída: Bom dia, João! -->

<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Olá</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Me Diga Qual O Seu Nome Por Favor! </h2>
			<form action="receber1.php" method="get">
			    <p>Digite Seu Nome:</p>
                    <input type="name" name="nome"><br></br>
			 
            
			
			        <button name="enviar"> Enviar </button>
			    </form>
		</div>
	</div>
</body>
</html>
