<?php
    include("../../config/conexion.php");

    if(isset($_POST['guardar'])){
      $Codigo = ($_POST['codigo']);
      $Descrip = ($_POST['descrip']);
      $Precio=($_POST['precio']);
      $Exist=($_POST['exist']);


      $consulta="INSERT INTO producto(codigo, nombre, precio, existencia) VALUES ('$Codigo','$Descrip','$Precio', '$Exist')";
      $resultado=mysqli_query($mysqli,$consulta);

      if($resultado){
        ?>
        <dialog><h3 class="ok">Datos correctamente Enviados!</h3></dialog>
        <?php
        header("Location: ../views/inicio.php");
      }else{
        ?>
        <dialog><h3 class="bad">Ha ocurrido un error!</h3></dialog>
        <?php
        ?><br><br><a class="btn btn-primary" href="../views/inicio.php"><button>Volver</button></a><?php
      }
    }
?>
