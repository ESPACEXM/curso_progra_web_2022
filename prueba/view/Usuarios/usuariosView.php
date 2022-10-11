<?php
session_start();
if(!$_SESSION['user_id']){

    header("location: ../.../index.php");

}
include_once("../../model/functions.php");

$usrClass = newusuariosModel();

$result = array();
$result = $usrClass->getUsuarios();


?>
<script src="assets/js/usuarioView.js"></script>
<div class = "card">
    <div class="card-header">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
            <h1>LISTADO DE USUARIOS</h1>
        </div>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">
                                ID
                            </th>
                            <th scope="col">
                                NOMBRE
                            </th>
                            <th scope="col">
                                USUARIO
                            </th>
                            <th scope="col">
                                CONTRASEÑA
                            </th>
                            <th scope="col">
                                FECHA DE CREACIÓN
                            </th>
                            <th scope="col">
                                FECHA DE ACTUALIZACIÓN
                            </th><th scope="col">
                                ACTUALIZAR
                            </th><th scope="col">
                                ELIMINAR
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($fila = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <th><?php echo $fila['id'];?></th>
                            <th><?php echo $fila['nombres']." ".$fila['apellidos'];?></th>
                            <th><?php echo $fila['usuario'];?></th>
                            <th><?php echo $fila['password'];?></th>
                            <th><?php echo $fila['fecha_created'];?></th>
                            <th><?php echo $fila['fecha_update'];?></th>
                            
                            <th>
                                <div class= "d-grid gap-2 d-md-flex justify-content-md-end"></div>
                                <button class = "btn btn-danger me-md-2"
                                id="btnEliminaUsuario"
                                name="btnEliminaUsuario"
                                type="button">
                                    
                                    
                                </button>
                            </th>

                            <th>
                                <div class= "d-grid gap-2 d-md-flex justify-content-md-end"></div>
                                <button class = "btn btn-danger me-md-2"
                                id="btnActualizaUsuario"
                                name="btnActualizaUsuario"
                                type="button">
                                    
                                    
                                </button>
                            </th>
                            
                        </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>