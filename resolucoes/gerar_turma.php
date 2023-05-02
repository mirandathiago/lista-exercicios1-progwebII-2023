<?php

$turmas = ["2ano-matutino","2ano-vespertino","3ano-matutino","3ano-vespertino" ];
$i = $_GET["turma"] ?? 0;
$turma = $turmas[$i];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Alunos - <?=$turma?></title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Alunos - <?=$turma?></h1>
	</header>
	<div class="container">
		<div class="box resposta">
        <?php

           

            $pastas = scandir($turma);


            $aluno = [];

            shuffle($pastas);

           
            foreach($pastas as $pasta){
                if($pasta != ".gitkeep" && $pasta != "." && $pasta != ".."){
                
                    $p = "./".$turma."/".$pasta;
                    echo "<li class='lista'> <a href='sorteio.php?pasta={$p}'  target='_blank'>{$pasta}</a></li>";
                
                }
            
            }

    ?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>











