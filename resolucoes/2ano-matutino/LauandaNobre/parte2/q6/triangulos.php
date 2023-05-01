<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <title>Triângulos</title>
</head>
<body>
    <h1>Triângulos</h1>
    <div class="container">
        <form action="triangulos.php" method="get">
            <label>
            Lado 1:
                <input type="number" name="lado1" required style="width: 100px;height:30px" placeholder="0" min="0">
            </label>
            <label>
            Lado 2:
                <input type="number" name="lado2" required  style="width: 100px;height:30px" placeholder="0" min="0">
            </label>
            <label>
            Lado 3:
                <input type="number" name="lado3" required  style="width: 100px;height:30px" placeholder="0" min="0">
            </label>
            <button>Calcular</button>
        </form>
        <div class="resposta">
            <?php
            $lado1 = $_GET["lado1"] ?? 0;
            $lado2 = $_GET["lado2"] ?? 0;
            $lado3 = $_GET["lado3"] ?? 0;

            $ladosiguais = $lado1 == $lado2 && $lado2 == $lado3;
            $ladomaior3 = $lado1 < $lado3 && $lado2 < $lado3 || $lado1 == $lado2 && $lado2 < $lado3;
            $ladomaior2 = $lado1 < $lado2 && $lado3 < $lado2 || $lado1 == $lado3 && $lado1 < $lado2;
            $ladomaior1 = $lado2 < $lado1 && $lado3 < $lado1 || $lado2 == $lado3 && $lado3 < $lado1;

            $doisLadosIguais = $lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3;
            $todosOsLadosDiferentes = $lado1 != $lado2 && $lado2 != $lado3 && $lado1 != $lado3;
            if($ladosiguais){
                echo "É possivel formar um triângulo<br>";
                echo "É um triângulo equilátero, todos os lados são iguais!!";
            }
            elseif($ladomaior3){
                $soma = $lado1 + $lado2;
                if($soma > $lado3){
                    //é possivel formar um triangulo
                    echo "É possivel formar um triângulo<br>";
                    if($doisLadosIguais){
                        echo "É um triângulo Isósceles:dois lados iguais<br>";
                    }elseif($todosOsLadosDiferentes){
                        echo "É um triângulo Escaleno :todos os lados diferentes<br>";
                    }
                }else{
                    echo "Não é possivel formar um triângulo";
                }
            }
            elseif($ladomaior2){
                $soma = $lado1 + $lado3;
                if($soma > $lado2){
                    //é possivel formar um triangulo
                    echo "É possivel formar um triângulo<br>";
                    if($doisLadosIguais){
                        echo "É um triângulo Isósceles:dois lados iguais<br>";
                    }elseif($todosOsLadosDiferentes){
                        echo "É um triângulo Escaleno :todos os lados diferentes<br>";
                    }
                }else{
                    echo "Não é possivel formar um triângulo";
                }
            }
            elseif($ladomaior1){
                $soma = $lado2 + $lado3;
                if($soma > $lado1){
                    //é possivel formar um triangulo
                    echo "É possivel formar um triângulo<br>";
                    if($doisLadosIguais){
                        echo "É um triângulo Isósceles:dois lados iguais<br>";
                    }elseif($todosOsLadosDiferentes){
                        echo "É um triângulo Escaleno :todos os lados diferentes<br>";
                    }
                }else{
                    echo "Não é possivel formar um triângulo";
                }
            }else{
                echo "Não é possivel formar um triângulo";
            }

            ?>
        </div>
    </div>
</body>
</html>