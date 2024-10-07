<!DOCTYPE html>
<html>
<head>
    <title>Farmacia - modificacion de producto</title>
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

          $query="SELECT * FROM producto WHERE codigo='$id'";
          $resultados=$mysqli->query($query);
          $row=$resultados->fetch_assoc();
      ?>

    <form action="../models/modificarProductoProceso.php?codigo=<?php echo $row['codigo']; ?>" method="post" class="formulario" onsubmit="return validar();">

    <label for="" class="formulariolabel">Codigo</label>
    <input type="text" name="codigo" value="<?php echo $row['codigo'] ?>" disabled>
    <label for="" class="formulariolabel">Nombre</label>
    <input type="text" required name="descrip" value="<?php echo $row['nombre'] ?>">
    <label for="" class="formulariolabel">Precio</label>
    <input type="text" required name="precio" value="<?php echo $row['precio'] ?>">
    <label for="" class="formulariolabel">Cantidad</label>
    <input type="text" required name="exist" value="<?php echo $row['existencia'] ?>">

    <label for="" class="formulariolabel"></label>
    <input type="submit" class="submit" value="Listo" onclick="MensajeUpdate();">


   </form>


</body>
</html>
