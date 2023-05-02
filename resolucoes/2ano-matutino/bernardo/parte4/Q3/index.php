<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	
	     <!-- 3- Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza. Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes. Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach. Certifique-se de que a lista seja clara e fácil de ler, para que o cliente possa verificar suas escolhas antes de fazer o pedido.
 --->
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de Pizzaria</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Selecione os sabores da pizza que deseja</h2>
			<form action="resposta.php" method="post">
			   <fieldset>
				<legend>Sabores:</legend>
				<div>
				  <input type="checkbox" name="sabor1" value="Calabresa">
				  <label><strong>Calabresa</strong> -> ( linguiça calabresa, molho de tomate fresco, cebola, azeitona, queijo muçarela e orégano salpicado)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor2" value="Portuguesa">
				  <label><strong>Portuguesa</strong> -> (cebola, azeitona, ervilha, queijo, presunto)</label>
				</div>
				<div>
				  <input type="checkbox"  name="sabor3" value="Marguerita">
				  <label><strong>Marguerita</strong> -> (muçarela, tomate, manjericão, orégano)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor4" value="Frango com catupiry">
				  <label><strong>Frango com catupiry</strong> -> (catupiry e frango desfiado)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor5" value="Napolitana">
				  <label><strong>Napolitana</strong> -> (orégano salpicado, tomate fresco, azeitona sem caroço, queijo muçarela e parmesão)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor6" value="Quatro queijos">
				  <label><strong>Quatro queijos</strong> -> (muçarela, catupiry, provolone e parmesão)</label>
				</div>
				<div>
				  <input type="checkbox"  name="sabor7" value="Atum com cebola">
				  <label><strong>Atum com cebola</strong> -> (atum sólido, cebola em rodelas e molho de tomate)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor8" value="Baiana">
				  <label><strong>Baiana</strong> -> (calabresa moída, ovos, pimenta, cebola e um toque de parmesão)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor9" value="Caipira">
				  <label><strong>Caipira</strong> -> (frango, milho e catupiry)</label>
				</div>
			  </fieldset>
				<button name="enviar"> Enviar </button>
			</form>
            
		</div>
	</div>
</body>
</html>