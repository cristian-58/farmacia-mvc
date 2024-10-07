<?php
    include("../../config/conexion.php");

      $id=$_REQUEST['codigo'];

      $query="DELETE FROM vendedor WHERE codigo='$id'";
      $resultado=$mysqli->query($query);

      if ($resultado) {
        header("Location: ../views/inicio.php");
      }
      else {
        echo "Ha ocurrido un error";
        ?><br><br><a class="btn btn-primary" href="../views/inicio.php"><button>Volver</button></a><?php
      }

?>
