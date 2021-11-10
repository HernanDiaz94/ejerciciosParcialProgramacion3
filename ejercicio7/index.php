<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcular</h1>

    <form action="calcular.php" method="post">
        <label for="valor1">Ingrese valor1:</label>
        <input type="number" name="valor1"><br>
        <label for="valor2">Ingrese valor2:</label>
        <input type="number" name="valor2"><br>
        <label for="operacion">Elige la operacion:</label><br>
        <input type="radio" name="operacion" value="+">Suma <br>
        <input type="radio" name="operacion" value="-">Resta <br>
        <input type="radio" name="operacion" value="*">Multiplicacion <br>
        <input type="radio" name="operacion" value="/">Division <br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>