<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 10</h1>
    <ul>
        <?php
            $colores=['rojo','amarillo','verde','azul'];
            for($i=0;$i<count($colores); $i++){?>
                
                <li><?php echo "$colores[$i]"?></li>
            
            <?php } ?>
        
    </ul>
</body>
</html>
