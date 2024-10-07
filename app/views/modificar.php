<!DOCTYPE html>
<html>
<head>
    <title>Farmacia - modificacion de usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet"  href="../../public/css/estilo.css">
	<link rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../../public/js/validar.js"></script>

</head>

<body background="../../public/img/cafe.jpg">

           <div>

            <div class="logo">

                <img src="../../public/img/logo.png" alt="">
            </div>
            </div>

      <?php

          $id=$_REQUEST['id'];

          include("../../config/conexion.php");

          $query="SELECT * FROM usuario WHERE id='$id'";
          $resultados=$mysqli->query($query);
          $row=$resultados->fetch_assoc();
      ?>

    <form action="../models/modificarProceso.php?id=<?php echo $row['id']; ?>" method="post" class="formulario" onsubmit="return validar();">

    <label for="" class="formulariolabel">Nombre</label>
    <input type="text" required name="nombre" value="<?php echo $row['nombre'] ?>">
    <label for="" class="formulariolabel">Correo</label>
    <input type="text" required name="correo" value="<?php echo $row['correo'] ?>">
    <label for="" class="formulariolabel">Contraseña</label>
    <input type="text" required name="contrasena" value="<?php echo $row['contrasena'] ?>">

    <label for="" class="formulariolabel"></label>
    <input type="submit" class="submit" value="Listo" onclick="MensajeUpdate()">


   </form>


</body>
</html>
