<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="q3.css">

            <title>Pedido de Pizza</title>

</head>

<body>

          <h1>Selecione os sabores desejados:</h1>

              <form method="post" action="receber1.php">

                            <input type="checkbox" name="sabores[]" value="Calabresa">*Calabresa<br>

                            <input type="checkbox" name="sabores[]" value="Mussarela">*Mussarela<br>

                            <input type="checkbox" name="sabores[]" value="Portuguesa">*Portuguesa<br>

                            <input type="checkbox" name="sabores[]" value="Frango com Catupiry">*Frango com Catupiry<br>

                            <input type="checkbox" name="sabores[]" value="Marguerita">*Marguerita<br>

                            <input type="submit" value="Enviar Pedido">

              </form>

</body>

</html>