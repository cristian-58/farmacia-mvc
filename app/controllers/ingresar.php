<?php
    include("../../config/conexion.php");

    if(isset($_POST['guardar'])){
      $Nombre = ($_POST['nombre']);
      $Correo = ($_POST['correo']);
      $Contrasena=($_POST['contrasena']);


      $consulta="INSERT INTO usuario(nombre, correo, contrasena) VALUES ('$Nombre','$Correo','$Contrasena')";
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
      }
    }
?>
