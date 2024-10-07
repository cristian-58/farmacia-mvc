<?php
    include("../../config/conexion.php");

    if(isset($_POST['guardar'])){
      $Nombre = ($_POST['codigo']);
      $Correo = ($_POST['nombre']);
      $Contrasena=($_POST['cargo']);


      $consulta="INSERT INTO vendedor(codigo, nombre, cargo) VALUES ('$Nombre','$Correo','$Contrasena')";
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
