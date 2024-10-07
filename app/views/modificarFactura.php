<!DOCTYPE html>
<html>
<head>
    <title>Farmacia - modificacion de factura</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet"  href="../../public/css/estilo.css">
    <script type="text/javascript" src="../../public/js/validar.js"></script>

</head>

<body background="../../public/img/cafe.jpg">

           <div>

            <div class="logo">

                <img src="../../public/img/logo.png" alt="">
            </div>
            </div>

      <?php
      
        $id=$_REQUEST['codigo'];

        include("../../config/conexion.php");

        $query="SELECT * FROM factura WHERE codigo='$id'";
        $resultados=$mysqli->query($query);
        $row=$resultados->fetch_assoc();
      ?>

    <form action="../models/modificarFacturaProceso.php?codigo=<?php echo $row['codigo']; ?>" method="post" class="formulario" onsubmit="return validar();">

    <label for="" class="formulariolabel">Codigo</label>
    <input type="text" name="codigo" value="<?php echo $row['codigo'] ?>" disabled>
    <label for="" class="formulariolabel">Empleado</label>
    <input type="text" required name="vendedor" value="<?php echo $row['vendedor'] ?>">
    <label for="" class="formulariolabel">Producto</label>
    <input type="text" required name="producto" value="<?php echo $row['producto'] ?>">
    <label for="" class="formulariolabel">Cantidad</label>
    <input type="text" required name="cantidad" value="<?php echo $row['cantidad'] ?>">
    <label for="" class="formulariolabel">Total</label>
    <input type="text" required name="total" value="<?php echo $row['total'] ?>">

    <label for="" class="formulariolabel"></label>
    <input type="submit" class="submit" value="Listo" onclick="MensajeUpdate();">


   </form>


</body>
</html>
