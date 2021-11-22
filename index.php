<?php
      require 'multiple.php';
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplos</title>
</head>
<body>
    <header>
        <h1>Multiplos de 3 y 5</h1>      
      </header>
      <?php

       $multiple = new multiple(); // $a es un objeto
       $result = $multiple->buscaMultiple(1, 100);

       foreach($result as $valor){
            echo $valor.'<br>';
       }

            // for($i=1;$i<=100;$i++){
            //     echo $i."\n";
            //     switch([$i%3==0,$i%5==0]){
                    
            //         case [1,0] : echo "Falabella".'<br>'; break;
            //         case [0,1] : echo "IT".'<br>'; break;
            //         case [1,1] : echo "Integraciones".'<br>'; break;
            //         default   : echo $i; break;
            //     }
            //     echo "\n";
            // }
      ?>
        
</body>
<script>
</script>
</html>