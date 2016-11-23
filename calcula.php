<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $edades[] = $POST_['Edad1'];
        $edades[] = $POST_['Edad2'];
        $edades[] = $POST_['Edad3'];
        $edades[] = $POST_['Edad4'];
        $edades[] = $POST_['Edad5'];
        $edades[] = $POST_['Edad6'];
        
        $sumeo = 0;
        foreach ($edades as $num){
            $sumeo = $sumeo+$num;
        }
        echo "El resultado es $sumeo";
        
        $media = $suma/count($valor);
        echo "<br> La media es $media";
        ?>
    </body>
</html>
