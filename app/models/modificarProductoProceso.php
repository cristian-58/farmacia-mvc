<?php
    include("../../config/conexion.php");

      $codigo=$_REQUEST['codigo'];
      $descrip=$_POST['descrip'];
      $precio=$_POST['precio'];
      $exist=$_POST['exist'];

      $query="UPDATE producto SET nombre='$descrip', precio='$precio', existencia='$exist' WHERE codigo='$codigo'";
      $resultado=$mysqli->query($query);

      if ($resultado) {
        header("Location: ../views/inicio.php");
      }
      else {
        echo "Ha ocurrido un error";
      }

?>
