<?php
$num = (int) readline("Digite um número inteiro: "); /*A função readline() implementam uma interface para a biblioteca GNU Readline. Estas são funções que provem uma linha de comando editável. Um exeplo é o bash que permite a você usar as setas para inserir caracteres ou navegas no historico dos comandos. */

echo "Tabuada do número {$num}: \n";

$i = 1;
while ($i <= 10) {
    $resultado = $num * $i;
    echo "{$num} x {$i} = {$resultado} \n";
    $i++;
}
/*Explicação do programa:

 utilizamos a função readline() para receber um número inteiro como entrada do usuário, e em seguida, fazemos o cast para o tipo inteiro usando o (int).E depois utilizamos o comando echo para imprimir na tela a mensagem indicando que a tabuada do número será exibida.*/
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
		<h1>Estrutura de Repetição</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			echo " <p> A tabuada do número {$num} é {$resultado}</p> ";
/* A base de todos os programas foram dos documentos(php,html e css)usados em sala de aula */
			?>
		</div>
	</div>
</body>
</html>