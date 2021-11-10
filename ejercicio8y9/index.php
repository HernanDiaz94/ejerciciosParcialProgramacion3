<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nuevo Producto</h1>

    <form action="alta_producto.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre"><br>
        <label for="precio">Precio:</label><br>
        <input type="number" name="precio"><br>
        <label for="operacion">Elige la marca:</label><br>
        <input type="radio" name="marca" value="Samsung">Samsung <br>
        <input type="radio" name="marca" value="Motorola">Motorola <br>
        <input type="radio" name="marca" value="LG">LG <br>
        <input type="radio" name="marca" value="Xiaomi">Xiaomi <br><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>