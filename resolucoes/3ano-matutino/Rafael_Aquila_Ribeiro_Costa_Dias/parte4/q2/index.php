<!-- Crie um formulário com um campo do tipo textarea que permita que você adicione o nome de várias pessoas,
 cada uma em uma linha. Em seguida processe a informação deste formulário apresentando 1 pessoa
  que foi sorteada de forma aleatória pelo PHP. Para isso será necessário transformar o texto gerado
   em um array através da função explode e do separador “\n” que representa uma quebra de linha neste campo. 
   Para sortear será necessário utilizar a função rand do php em que você deve passar o valor inicial e o final, 
   sendo que o valor inicial a ser gerado deverá ser o 0 e o final a quantidade de nomes - 1, já que os índices do array 
   devem iniciar com 0. Para verificar a quantidade de itens pode ser utilizada a função count do php.-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Pessoas</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Sorteio de nomes</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="q2.php" method="post"> 
			  <fieldset>
				<legend>Escreva nomes aleatórios de pessoas</legend>
				<div>
                    <label for="pessoas">Digite o nome das pessoas:</label><!-- Área de texto para o usuário digitar os nomes das pessoas -->
		            <textarea name="pessoas"></textarea>
				</div>
			  </fieldset>
				
				<button name="enviar" type="submit"> Sortear </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Sorteio</h2>
            <?php
                if(isset($_POST['pessoas'])){ //O 'isset' verifica se a varíavel está definida ou nula. Ou seja se está definida retorna a true
	                $pessoas = $_POST['pessoas']; // Obtém o valor do campo "pessoas" do formulário
	                $pessoas_array = explode("\n", $pessoas); // Separa as informações do array com "\n"
	                $num_pessoas = count($pessoas_array);
	                $indice_sorteado = rand(0, $num_pessoas-1); //Gerado um número aleatório entre 0 e o número de elementos - 1-->Subtrai o 1 para ajudar o indice do array, já que começa com 0
	                $pessoa_sorteada = $pessoas_array[$indice_sorteado]; 	// Obtém o nome da pessoa sorteada do array de pessoas, utilizando o índice sorteado        
                    echo "<h3>Lista de pessoas:</h3>";
                    foreach($pessoas_array as $pessoa){// Utiliza o loop foreach para percorrer o array de pessoas e exibir cada nome na tela
                            echo $pessoa . "<br>";
                    }
    
                    echo "<h3>A pessoa sorteada foi: $pessoa_sorteada</h3>";
                }
            ?>
		</div>
	</div>
</body>
</html>