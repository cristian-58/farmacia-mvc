<?php
    include("../../config/conexion.php");

    if(isset($_POST['guardar'])){
      $Codigo = ($_POST['codigoFactura']);
      $Empleado = ($_POST['vendedorFactura']);
      $Producto = ($_POST['productoFactura']);
      $Cantidad = ($_POST['cantidadFactura']);
      $Total = ($_POST['totalFactura']);


      $consulta="INSERT INTO factura(codigo, fecha, vendedor, producto, cantidad, total) VALUES ('$Codigo', null, '$Empleado','$Producto', '$Cantidad', '$Total')";
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
