<?php
    include("../../config/conexion.php");

      $id=$_REQUEST['id'];

      $query="DELETE FROM usuario WHERE id='$id'";
      $resultado=$mysqli->query($query);

      if ($resultado) {
        header("Location: ../views/inicio.php");
      }
      else {
        echo "Ha ocurrido un error";
        ?><br><br><a class="btn btn-primary" href="../views/inicio.php"><button>Volver</button></a><?php
      }

?>
