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
		<h1>soma dos numeros</h1>
	</header>
	<?php
	if(isset($_POST['enviar'])){
	$campo1 = $_POST['campo1'];
	$campo2 = $_POST['campo2'];
	$campo3 = $_POST['campo3'];

	if(($campo1 --> $campo2) &amp;&amp; ($campo1 &gt; $campo3)){
	echo "<p>O maior número é: " . $campo1 . "</p>";
	}elseif(($campo2 &gt; $campo1) &amp;&amp; ($campo2 &gt; $campo3)){
	echo "<p>O maior número é: " . $campo2 . "</p>";
	}else{
	echo "<p>O maior número é: " . $campo3 . "</p>";
	}

	if(($campo1 &lt; $campo2) &amp;&amp; ($campo1 &lt; $campo3)){
	echo "<p>O menor número é: " . $campo1 . "</p>";
	}elseif(($campo2 &lt; $campo1) &amp;&amp; ($campo2 &lt; $campo3)){
	echo "<p>O menor número é: " . $campo2 . "</p>";
	}else{
	echo "<p>O menor número é: " . $campo3 . "</p>";
}
?>

	</div>
	</div>
</body>
</html>