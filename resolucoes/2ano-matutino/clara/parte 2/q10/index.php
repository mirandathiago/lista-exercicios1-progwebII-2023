<!DOCTYPE html>
<html>
<head>
    <!--- 10- João trabalha em uma empresa que funciona de segunda a sexta-feira, 
    mas ele tem um compromisso importante no trabalho que precisa ser realizado em um dia específico da semana. 
    Para ajudá-lo, você deve desenvolver um programa que permita que ele informe o dia da semana em que esse compromisso será realizado e o programa deve informar se é um dia útil, 
    final de semana ou se o dia informado é inválido.
    Para isso, crie um formulário com um campo select que permita a escolha do dia da semana (de 1 a 7),
    e utilize o comando switch para verificar em qual dia da semana foi selecionado e, em seguida, informar se o dia é útil (segunda a sexta-feira), 
    final de semana (sábado e domingo) ou inválido (número menor que 1 ou maior que 7). Considere que Domingo é o dia 1 e Sábado o dia 7.
    Exemplo de entrada: Selecionado no campo select o valor 3 (que representa a quarta-feira)
    Exemplo de saída: A quarta-feira é um dia útil.
    --->
<title>Atividade da lista</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>ATIVIDADE DA LISTA SEMANA</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Semana</h2>
			<form action="resposta.php" method="post">
		
			<!-- OPÇÃO PRO USUÁRIO ESCOLHER -->
				<label>Qual dia da semana?
				<select name="dia">
						<option value="1">Domingo</option>
						<option value="2">Segunda-feira</option>
						<option value="3">Terça-feira</option>
						<option value="4">Quarta-feira</option>
						<option value="5">Quinta-feira</option>
						<option value="6">Sexta-feira</option>
						<option value="7">Sabado</option>						
					</select>
				</label>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>

		</div>
	</div>
</body>
</html>