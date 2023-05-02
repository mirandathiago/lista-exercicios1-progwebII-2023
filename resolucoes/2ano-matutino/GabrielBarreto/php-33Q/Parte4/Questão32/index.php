<!--2- Crie um formulário com um campo do tipo textarea que permita que você adicione o nome de várias pessoas, cada uma em uma linha. Em seguida processe a informação deste formulário apresentando 1 pessoa que foi sorteada de forma aleatória pelo PHP. Para isso será necessário transformar o texto gerado em um array através da função explode e do separador “\n” que representa uma quebra de linha neste campo. Para sortear será necessário utilizar a função rand do php em que você deve passar o valor inicial e o final, sendo que o valor inicial a ser gerado deverá ser o 0 e o final a quantidade de nomes - 1, já que os índices do array devem iniciar com 0. Para verificar a quantidade de itens pode ser utilizada a função count do php.

-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto com um desconto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div id="container">
            <h1>Parte 4 (2) Questão 32:</h1>
            <p> Sorteador de Nomes. Insira os nomes (cada um dividido pelo enter)</p>

            <br>
            <form action="index.php" method="post">
                <label>Nomes<br>
                <textarea id="names" name="names" rows="5" cols="100">
                </textarea>
                </label>

                <button class="btn-finish">Finish </button>
                <a href="../Questão33/index.php"><button class="next">Next Page</button></a>

            </form>

        </div>
        <div id="container">
            <h1>Nome aleatório:</h1>
            <?php
            $method = $_SERVER["REQUEST_METHOD"];
            if($method == "POST"){

                 $textarea = $_POST["names"];
                 $textarea_exploder = explode("\n",$textarea);
                 /*Tamanho do array definido com count */
                 $textarea_exploder_length = count($textarea_exploder);
                 /*indice aleatório*/
                 $randomIndice = rand(0,$textarea_exploder_length-1 );
                 //var_dump($textarea_exploder_length);teste da var
                 
                    echo "Nome sorteado:".$textarea_exploder[$randomIndice];
                 
                 
                
            }
            ?>
        </div>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </main>
</body>

</html>