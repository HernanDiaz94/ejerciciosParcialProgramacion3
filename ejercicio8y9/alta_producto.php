
<?php

    $conexion= mysqli_connect("localhost","root","","test");

    var_dump($_POST);
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $marca = $_POST['marca'];

    $sql= " INSERT INTO productos(nombre,precio,marca) 
            VALUES('$nombre',$precio,'$marca')";

    $resultado= mysqli_query($conexion,$sql);

    if($resultado){
        echo "Alta de producto correcta";
    }else {
        echo "Alta de producto incorrecta";
    }

?>