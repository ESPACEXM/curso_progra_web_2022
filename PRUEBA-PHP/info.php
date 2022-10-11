<?php

function conexion(){

    #Estas son las variables para la conexión
    $host = 'localhost';
    $usuario = 'root';
    $password = 'Sksakmak47.';
    $database = 'PRUEBA';


    $conexion = mysqli_connect($host,$usuario,$password,$database);

    if($conexion){
        echo "CONEXIÓN EXITOSA";
        mysqli_query($conexion, "SET NAMES 'utf8'");

    }else{
        echo "CONEXION FALLIDA ".mysqli_error();

    }

    return $conexion;
}


$resultado = conexion();

mysqli_close($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba PHP</title>
</head>
<body>
    
</body>
</html>