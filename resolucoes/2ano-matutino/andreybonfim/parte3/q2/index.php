<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

    <body>
        <form action="index.php" method="post">
             Tabuada do:  <input type="number" name="tab" /> <br/>
            <button> Calcular </button> 

        <?php 
            $num = $_POST ["tab"] ?? 0;
             $count = 0;
  
            while($count <= 10){
            echo $num." x ".$count." = ".($num*$count)."<br />";
            $count++;
            }          
        ?>
        </form>
 </body>
</html>