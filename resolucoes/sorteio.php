<?php
$pasta = $_GET["pasta"];

$p = explode("/",$pasta);
$nome = end($p);

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
		<?php
            echo "<h1>".strtoupper($nome)."</h1>";
           
        ?>
	</header>
	<div class="container">
		<div class="box resposta">
        <?php

echo "<h2>Questões Respondidas</h2>";

$partes = ["parte1","parte2","parte3","parte4"];

 
 echo "<h3>Parte 1</h3>";
        $questoes = scandir($pasta."/parte1");
        $aluno = [];
        $aluno["parte1"] = [];
        $aluno["parte2"] = [];
        $aluno["parte3"] = [];
        $aluno["parte4"] = [];

        foreach($questoes as $questao){
            if($questao != ".gitkeep" && $questao != "." && $questao != ".." && is_dir($pasta."/parte1/". $questao)){
                $aluno["parte1"][] = $questao;
            }
        }
        echo "<h4>".implode(",", $aluno["parte1"])."</h4>";
        echo "<h3>Parte 2</h3>";
        $questoes = scandir($pasta."/parte2");
        foreach($questoes as $questao){
            if($questao != ".gitkeep" && $questao != "." && $questao != ".." && is_dir($pasta."/parte2/". $questao)){
                $aluno["parte2"][] = $questao;
            }
           
        }
        echo "<h4>".implode(",", $aluno["parte2"])."</h4>";
        echo "<h3>Parte 3</h3>";
        $questoes = scandir($pasta."/parte3");
        foreach($questoes as $questao){
            if($questao != ".gitkeep" && $questao != "." && $questao != ".." && is_dir($pasta."/parte3/". $questao)){
                $aluno["parte3"][] = $questao;
            }
            
        }
        echo "<h4>".implode(",", $aluno["parte3"])."</h4>";
        echo "<h3>Parte 4</h3>";
        $questoes = scandir($pasta."/parte4");
        foreach($questoes as $questao){
            if($questao != ".gitkeep" && $questao != "." && $questao != ".." && is_dir($pasta."/parte4/". $questao)){
                $aluno["parte4"][] = $questao;
            }
            
        }
        echo "<h4>".implode(",", $aluno["parte4"])."</h4>";
       


    echo "<hr>";
    $partesorteada = $partes[array_rand($partes)];
    $questaosorteada =  $aluno[$partesorteada][array_rand($aluno[$partesorteada])] ;
    echo "<h3 class='alerta-verde'>Parte Sorteada: <span class='sorterio'> {$partesorteada}</span></h3>";
    echo "<h3 class='alerta-verde'>Questão Sorteada: <span class='sorterio'>{$questaosorteada}</span></h3>";     


    echo "<a class='link' href='".$pasta."/".$partesorteada."/".$questaosorteada."' target='_blank'>Ir para a Questão</a>";

           ?>
		</div>
	</div>
</body>
</html>





