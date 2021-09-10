<?php
require_once 'config/conexion.php';
session_start();
if (!isset($_SESSION['idUsuario'])) {
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<?php include('template/head.php'); ?>

<body>
  <?php
  include('template/header.php'); ?>
  <a class="nav-link" href="config/cerrar_session.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>

  estoy logueado
  <?php include('template/footer.php'); ?>
</body>

</html>