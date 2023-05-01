<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="q1.css">

              <title>Frutas Selecionadas</title>

</head>

<body>

              <h1>Frutas Selecionadas:</h1>

              <?php

               // Verifica se o campo de checkbox 'frutas' foi enviado pelo formulário

              if(isset($_POST['frutas'])){

             // Cria um array a partir dos valores selecionados do campo de checkbox 'frutas'

                       $frutas = $_POST['frutas'];

         // Verifica se o array 'frutas' contém pelo menos um elemento

           if(count($frutas) > 0){

                            // Exibe as frutas selecionadas usando o comando 'foreach'

                                     echo "<ul>";

                              foreach ($frutas as $fruta) {

                                      echo "<li>" . $fruta . "</li>";

                                                        }

                                                        echo "</ul>";

                                          }

                                          else{

                                        echo "<p>Nenhuma fruta foi selecionada.</p>";

                                          }

                            }

                            else{

                        echo "<p>Nenhuma fruta foi selecionada.</p>";

                            }

              ?>

</body>

</html>