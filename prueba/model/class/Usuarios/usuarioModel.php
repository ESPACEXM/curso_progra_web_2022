<?php

class usuarioModel{
    /*Metodo para obtener todos los usuarios
    */
    function getUsuarios(){

        $conexionClass = new Tools();
        $conexion = conexionClass->conectar();

        $sql = "SELECT id,nombres,apellidos, usuario, password, fecha_created,fecha_update FROM users";

        $resultado = mysqli_query($conexion,$sql);
        $conexionClass->desconectar();
        return $resultado;
    }
}

?>