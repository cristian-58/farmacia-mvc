<?php
    include("../../config/conexion.php");

      $id=$_REQUEST['codigo'];
      $codigo =$_POST['codigo'];
      $nombre =$_POST['nombre'];
      $cargo=$_POST['cargo'];

      $query="UPDATE vendedor SET nombre='$nombre', cargo='$cargo' WHERE codigo='$id'";
      $resultado=$mysqli->query($query);

      if ($resultado) {
        header("Location: ../views/inicio.php");
      }
      else {
        echo "Ha ocurrido un error";
      }

?>
