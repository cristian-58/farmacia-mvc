<?php
    include("../../config/conexion.php");

      $codigo=$_REQUEST['codigo'];
      $descrip=$_POST['vendedor'];
      $precio=$_POST['producto'];
      $exist=$_POST['cantidad'];
      $total=$_POST['total'];

      $query="UPDATE factura SET vendedor='$descrip', precio='$precio', cantidad='$exist', total='$total' WHERE codigo='$codigo'";
      $resultado=$mysqli->query($query);

      if ($resultado) {
        header("Location: ../views/inicio.php");
      }
      else {
        echo "Ha ocurrido un error";
        ?><br><br><a class="btn btn-primary" href="../views/inicio.php"><button>Volver</button></a><?php
      }

?>
