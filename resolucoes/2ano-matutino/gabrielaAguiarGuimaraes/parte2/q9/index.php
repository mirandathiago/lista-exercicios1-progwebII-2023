<!--9- Maria está planejando sair de casa, mas ela quer escolher um local adequado de acordo com o clima do dia. Para isso, ele precisa da sua ajuda para criar um formulário que permita selecionar uma das seguintes opções de clima: ensolarado, ameno, chuvoso, nublado, tempestuoso. Em seguida, utilizando a estrutura de controle switch, você deve indicar qual local é mais apropriado para cada opção de clima escolhida por João. Considere as seguintes opções de locais:

Ensolarado: Clube
Ameno: Parque
Chuvoso: Cinema
Nublado: Museu
Tempestuoso: Ficar em casa
O formulário deve permitir a seleção de uma das opções de clima através de um campo select, e o resultado deve indicar qual o local mais apropriado para sair de acordo com o clima selecionado.
Entrada: Ensolarado
Saída: Com o clima ensolarado, recomendamos ir ao Clube.-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <form action="resposta.php" method="post">


        <h1>ESCOLHA O CLIMA</h1>
    <label>Qual o clima escolhido?
    <select name="clima"> 

       <option  value = ""></option>
       <option  value = "1">Ensolarado</option>
       <option  value = "2">Ameno</option>
       <option  value = "3">Chuvoso</option>
       <option  value = "4">Nublado</option>
       <option  value = "5">Tempestuoso</option>

    </select>
        
</label>
        <button>VERIFICAR</button>
    </form>


</body>

</html>