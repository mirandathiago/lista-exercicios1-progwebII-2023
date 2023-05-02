
<!DOCTYPE html>
<html>
<head>
	<title>Notas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo.css" rel="stylesheet">
</head>
<body>
	<div class="container">
   <h2>Formulário de notas</h2>
  <form action="atv3.php" method="get">
   
    <label>Nota 1:
    <input type="number"  name="nota1" min="0" max="10" required>
    </label>
    <label>Nota 2:
    <input type="number"  name="nota2" min="0" max="10" required>
    </label>
    <label>Nota 3:
    <input type="number"  name="nota3" min="0" max="10" required>
    </label>
    <button>Enviar</button>
  </form>

  <?php
    
    $nota1 = $_GET["nota1"] ?? 0;
    $nota2 = $_GET["nota2"] ?? 0;
    $nota3 = $_GET["nota3"] ?? 0;
   
    
    $media = ($nota1 + $nota2 + $nota3) / 3;

  
?> 
</div>
</body>
</html>