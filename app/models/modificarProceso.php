<?php
    include("../../config/conexion.php");

      $id=$_REQUEST['id'];
      $nombre =$_POST['nombre'];
      $correo =$_POST['correo'];
      $contrasena=$_POST['contrasena'];

      $query="UPDATE usuario SET nombre='$nombre', correo='$correo', contrasena='$contrasena' WHERE id='$id'";
      $resultado=$mysqli->query($query);

      if ($resultado) {
        header("Location: ../views/inicio.php");
      }
      else {
        echo "Ha ocurrido un error";
      }

?>
