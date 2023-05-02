<html>
    <head>
        <title>Lista de PHP</title>
    </head>

    <body>
        <form>
             Tabuada do:  <input type="number" name="tab" /> <br/>
            <button> Calcular </button>
        </form> 

        <?php 
            $num = $_GET['tab'] ?? 1;
             $count = 0;
  
            while($count <= 10){
            echo $num." x ".$count." = ".($num*$count)."<br />";
            $count++;
            }          
        ?>
 </body>
</html>