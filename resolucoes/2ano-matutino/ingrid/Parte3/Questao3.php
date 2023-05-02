<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<form method="post" action="Questao3.php">
  Início do intervalo: <input type="number" name="inicio"><br>
  Fim do intervalo: <input type="number" name="fim"><br>
  <input type="submit" name="submit" value="Calcular">
</form>

<?php
if(isset($_POST['submit'])){
  $inicio = $_POST['inicio'];
  $fim = $_POST['fim'];
  $cont = 0;
  for($i=$inicio;$i<=$fim;$i++){
    if($i % 2 == 0){
      $cont++;
    }
  }
  echo "Quantidade de números pares:<br> {$cont}";
}
/* A base de todos os programas foram dos documentos(php,html e css)usados em sala de aula */

?>

</body>
</html>