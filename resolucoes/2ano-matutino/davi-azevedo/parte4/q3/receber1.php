<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="q3.css">
  <title>Confirmação do Pedido</title>

</head>

<body>

              <h1>Pedido Confirmado</h1>

              <p>Você selecionou os seguintes sabores de pizza:</p>

              <ul>
                <br>

                            <?php

             // Verifica se o array 'sabores' foi enviado pelo formulário

                 if(isset($_POST['sabores'])){

              // Loop através do array 'sabores' e exibe cada sabor

             foreach($_POST['sabores'] as $sabor){
                                  echo "<li>---->$sabor</li>";

                     }

          }

           else{

          echo "<li>Nenhum sabor selecionado</li>";
                   }

                 ?>

              </ul>
              <br>
              <br>

             <p>Obrigado pelo seu pedido!</p>

</body>

</html>