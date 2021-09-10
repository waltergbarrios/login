<?php
require_once 'config/conexion.php';
session_start();

if (isset($_SESSION['admin'])) {
    header("Location: homeAdmin.php");
}
if (isset($_SESSION['operador'])) {
    header("Location: homeOperador.php");
}
if (isset($_SESSION['propietario'])) {
    header("Location: homePropietario.php");
} ?>

<!DOCTYPE html>
<html lang="es">
<?php include('template/head.php'); ?>

<body>
    <?php include('template/header.php'); ?>
    <main>


       <div class="card">
            <h3 class="card-header">Iniciar sesión</h3>
            
                <div class="card-body">

                <?php
                if(isset($_GET['msj']))
                {
                    if($_GET['msj'] == 1)
                        $mensaje = "Ingrese Usuario/Contraseña";
                    elseif($_GET['msj'] == 2)
                        $mensaje = "Usuario/Contraseña incorrecto";


                ?>

                <div class="alert alert-danger" role="alert">
                <?php echo $mensaje;?>
                </div>
                <?php

                }


                ?>
                
                    <div class="text-center">
                        <form class="form-control" action='config/validar_session.php' method='POST' autocomplete="off">
                            <p class="card-text">Correo electronico: </p> 
                            <INPUT class="input-group-lg" name="usuario" type="text" placeholder="E-mail" required autocomplete="false" >
                            <br>
                            <p class="card-text">Contraseña: </p>
                            <INPUT class="input-group-lg" name="pass" type="password" placeholder="Contraseña" required autocomplete="false" >
                            <br><br>
                            <input class="btn btn-outline-dark" type="submit" value="Iniciar Sesión">
                            
                        </form>
                    </div>
                    
                </div>
           
        </div>
    </main>
    <div class="corte">
    </div>
    <?php include('template/footer.php'); ?>
</body>

</html>