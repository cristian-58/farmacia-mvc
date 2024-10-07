<!DOCTYPE html>
<html>
<head>
  <title>Farmacia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet"  href="../../public/css/estilo.css">
	<link rel="stylesheet" type="text/css">
</head>

<body >

  <nav>
 	  <ul class="logo1">
 		  <img src="../../public/img/logo.png" alt="">
       Cristhian-la-Rebaja
		</ul>
    <div id="subTitulo">
      <a class="btn btn-primary" href="../../public/index.html"><button class="editar">Cerrar Sesion</button></a>
    </div>
  </nav>

  <div>
    <button class="tablink" onclick="openPage('Administradores', this, '#28a0ee')" id="defaultOpen">Administradores</button>
    <button class="tablink" onclick="openPage('Empleados', this, '#28a0ee')">Empleados</button>
    <button class="tablink" onclick="openPage('Productos', this, '#28a0ee')">Productos</button>
    <button class="tablink" onclick="openPage('Ventas', this, '#28a0ee')">Ventas</button>
  </div>

<div id="Administradores" class="tabcontent">

	<form action="../controllers/ingresar.php" method="post" class="formulario2">

     <div>
    <h1><font color="#ffffff"><b>Nuevo Administrador</b></font></h1>

    <br><br>

    <p>
        <label for="usernamesignup" class="name"><font color="#ffffff"><b>Nombre</b></font></label>
        <input id="nombre" name="nombre" required="required" type="text" placeholder="Nombre" />
    </p>
    <p>
        <label for="emailsignup" class="mail"><font color="#ffffff"><b>Correo</b></font></label>
        <input id="correo" name="correo" required="required" type="email" placeholder="ejemplo@mail.com"/>
    </p>
    <p>
        <label for="passwordsignup" class="passwd"><font color="#ffffff"><b>Contraseña</b></font></label>
        <input id="contrasena" name="contrasena" type="password" placeholder="ej: X8df!90EO" required="required"  title="Debe contener al menos un número y una letra minúscula y mayúscula, y al menos 8 o más caracteres"/>
    </p>

   <label for=""
    class="formulariolabel"></label>
    <input type="submit" class="guardar" value="guardar" name="guardar" onclick="MensajeSave"/>

	</form>

 </div>

  <form class="formulario3">
    <div id="wrapper">
      <table align="center" cellspacing=2 cellpadding=4 clas="data_table" border=1>
      <tr>
        <th><font color="#ffffff"><b>Id</b></font></th>
        <th><font color="#ffffff"><b>Nombre</b></font></th>
        <th><font color="#ffffff"><b>Correo</b></font></th>
        <th><font color="#ffffff"><b>Contraseña</b></font></th>
        <th><font color="#ffffff"><b>Editar</b></font></th>
        <th><font color="#ffffff"><b>Eliminar</b></font></th>
      </tr> 
    </tr>

 <?php

 include("../../config/conexion.php");

  $query="SELECT * FROM usuario";
  $resultados=$mysqli->query($query);
  while ($row=$resultados->fetch_assoc()) {
   ?>

 <tr>
   <td><?php echo $row['id']?></td>
   <td><?php echo $row['nombre']?></td>
   <td><?php echo $row['correo']?></td>
   <td><?php echo $row['contrasena']?></td>
   <td ><a href="../views/modificar.php?id=<?php echo $row['id']; ?>">Editar</td>
   <td ><a href="../models/eliminar.php?id=<?php echo $row['id']; ?>"><script>MensajeDelete();</script>Eliminar</td>
 </tr>

 <?php

  }

  ?>

  </form>

  </table>

  </div>
</div>

<div id="Empleados" class="tabcontent">

    <form action="../models/IngresarVendedor.php" method="post" class="formulario2">

       <div>
      <h1><font color="#ffffff"><b>Nuevo Empleado</b></font></h1>

      <br><br>

      <p>
          <label for="usernamesignup" class="name"><font color="#ffffff"><b>Codigo</b></font></label>
          <input id="nombre" name="codigo" required="required" type="text" placeholder="12345" />
      </p>
      <p>
          <label for="emailsignup" class="name"><font color="#ffffff"><b>Nombre</b></font></label>
          <input id="correo" name="nombre" required="required" type="text" placeholder="Alberto Martinez"/>
      </p>
      <p>
          <label for="passwordsignup" class="name"><font color="#ffffff"><b>Cargo</b></font></label>
          <input id="contrasena" name="cargo" type="text" placeholder="Auxiliar" required="required"/>
      </p>

     <label for=""
      class="formulariolabel"></label>
      <input type="submit" class="guardar" value="guardar" name="guardar" onclick="MensajeSave()"/>

  	</form>

   </div>

  <form class="formulario3">
  <div id="wrapper">
  <table align='center' cellspacing=2 cellpadding=4 clas="data_table" border=1>
  <tr>
    <th><font color="#ffffff"><b>Codigo</b></font></th>
    <th><font color="#ffffff"><b>Nombre</b></font></th>
    <th><font color="#ffffff"><b>Cargo</b></font></th>
    <th><font color="#ffffff"><b>Editar</b></font></th>
    <th><font color="#ffffff"><b>Eliminar</b></font></th>
  </tr>
  </tr>

   <?php

   include("../../config/conexion.php");

   $query="SELECT * FROM vendedor";
   $resultados=$mysqli->query($query);
   while ($row=$resultados->fetch_assoc()) {
     ?>

   <tr>
     <td><?php echo $row['codigo']?></td>
     <td><?php echo $row['nombre']?></td>
     <td><?php echo $row['cargo']?></td>
     <td ><a href="../views/modificarVendedor.php?codigo=<?php echo $row['codigo']; ?>">Editar</td>
     <td ><a href="../models/eliminarVendedor.php?codigo=<?php echo $row['codigo']; ?>"><script>MensajeDelete();</script>Eliminar</td>
   </tr>

   <?php

  }

    ?>

    </form>

  </table>
  </div>
</div>

<div id="Productos" class="tabcontent">

		<form action="../models/IngresarProducto.php" method="post" class="formulario2">

       <div>
      <h1><font color="#ffffff"><b>Nuevo Producto</b></font></h1>

      <br>

      <p>
          <label for="usernamesignup" class="name"><font color="#ffffff"><b>Codigo</b></font></label>
          <input id="nombre" name="codigo" required="required" type="text" placeholder="123456" />
      </p>
      <p>
          <label for="emailsignup" class="mail"><font color="#ffffff"><b>nombre</b></font></label>
          <input id="correo" name="descrip" required="required" type="text" placeholder="Ibuprofeno"/>
      </p>
      <p>
          <label for="passwordsignup" class="passwd"><font color="#ffffff"><b>Precio</b></font></label>
          <input id="contrasena" name="precio" required="required" type="text" placeholder="$000" required="required"  title="Debe contener al menos un número y una letra minúscula y mayúscula, y al menos 8 o más caracteres"/>
      </p>
			<p>
          <label for="passwordsignup" class="passwd"><font color="#ffffff"><b>Existencia</b></font></label>
          <input id="contrasena" name="exist" required="required" type="text" placeholder="0" required="required"  title="Debe contener al menos un número y una letra minúscula y mayúscula, y al menos 8 o más caracteres"/>
      </p>

     <label for=""
      class="formulariolabel"></label>
      <input type="submit" greenvalue="guardar" class="guardar" name="guardar" onclick="MensajeSave()"/>

  	</form>

   </div>

  <form class="formulario3">
  <div id="wrapper">
  <table align='center' cellspacing=2 cellpadding=4 clas="data_table" border=1>
  <tr>
    <th><font color="#ffffff"><b>Codigo</b></font></th>
    <th><font color="#ffffff"><b>Nombre</b></font></th>
    <th><font color="#ffffff"><b>Precio</b></font></th>
    <th><font color="#ffffff"><b>Existencia</b></font></th>
    <th><font color="#ffffff"><b>Editar</b></font></th>
    <th><font color="#ffffff"><b>Eliminar</b></font></th>
  </tr>
  </tr>

   <?php

   include("../../config/conexion.php");

   $query="SELECT * FROM producto";
   $resultados=$mysqli->query($query);
   while ($row=$resultados->fetch_assoc()) {
     ?>

   <tr>
     <td><?php echo $row['codigo']?></td>
     <td><?php echo $row['nombre']?></td>
     <td><?php echo $row['precio']?></td>
     <td><?php echo $row['existencia']?></td>
     <td ><a href="../views/modificarProducto.php?codigo=<?php echo $row['codigo']; ?>">Editar</td>
     <td ><a href="../models/eliminarProducto.php?codigo=<?php echo $row['codigo']; ?>"><script>MensajeDelete();</script>Eliminar</td>
   </tr>

   <?php

  }

    ?>

    </form>

  </table>
  </div>
</div>

<div id="Ventas" class="tabcontent">
  	<form action="../models/IngresarFactura.php" method="post" class="formulario2">

       <div>
      <h1><font color="#ffffff"><b>Nueva Venta</b></font></h1>

      <p>
          <label for="usernamesignup" class="name"><font color="#ffffff"><b>Codigo</b></font></label>
          <input id="nombre" name="codigoFactura" required="required" type="text" placeholder="12345" />
      </p>
      <p>
          <label for="emailsignup" class="name"><font color="#ffffff"><b>Vendedor</b></font></label>
          <select name="vendedorFactura" class="select-css">
          <?php

          include("../../config/conexion.phpp");

          $query2="SELECT * FROM vendedor";
          $resultados2=$mysqli->query($query2);
          //var_dump($resultados2);

          while ($row=$resultados2->fetch_assoc()){
            ?>
              <option name="vendedorFactura"><?php echo $row['codigo']?></option>
            <?php
          }
          ?>
          </select>
          <!--<input id="correo" name="vendedorFactura" required="required" type="text" placeholder="ID/identidicador del Vendedor o Empleado" />-->
      </p>
			<p>
          <label for="passwordsignup" class="name"><font color="#ffffff"><b>Producto</b></font></label>
          <select name="productoFactura" class="select-css">
            <?php

            include("../../config/conexion.php");

            $id=$_REQUEST['codigo'];

            $query3="SELECT * FROM producto";
            $resultados3=$mysqli->query($query3);

            ?>
              <script type="text/javascript">
                int id=<?php echo $id?>;
              </script>
            <?php

            while ($row=$resultados3->fetch_assoc()){
              ?>
                <option name="productoFactura"><?php echo $row['codigo']?></option>
              <?php
            }
            ?>
          </select>
      </p>
      <p>
          <label for="passwordsignup" class="name"><font color="#ffffff"><b>Cantidad</b></font></label>
          <input type="number" name="cantidadFactura" required="required" min="0" max="20" placeholder="0"/>
      </p>
      <p>
          <label for="passwordsignup" class="name"><font color="#ffffff"><b>Total</b></font></label>
          <input name="totalFactura" required="required" type="text" placeholder="$0000"/>
      </p>

    <label for="" 
    class="formulariolabel"></label>
    <input type="submit" greenvalue="guardar" class="guardar" name="guardar" onclick="MensajeSave()"/>

  	</form>

   </div>

  <form class="formulario3">
  <div id="wrapper">
  <table align='center' cellspacing=2 cellpadding=4 clas="data_table" border=1>
  <tr>
    <th><font color="#ffffff"><b>Codigo</b></font></th>
    <th><font color="#ffffff"><b>Empleado</b></font></th>
    <th><font color="#ffffff"><b>Producto</b></font></th>
    <th><font color="#ffffff"><b>Cantidad</b></font></th>
    <th><font color="#ffffff"><b>Total</b></font></th>
    <th><font color="#ffffff"><b>Fecha</b></font></th>
    <th><font color="#ffffff"><b>Editar</b></font></th>
    <th><font color="#ffffff"><b>Eliminar</b></font></th>
  </tr>
  </tr>

   <?php

   include("../../config/conexion.php");

   $query="SELECT * FROM factura";
   $resultados=$mysqli->query($query);

   while ($row=$resultados->fetch_assoc()) {
     
    $idEmpleado = $row["vendedor"];
    $idProducto = $row["producto"];

    ?>

   <tr>
     <td><?php echo $row['codigo']?></td>
     <td><?php echo $idEmpleado?></td>
     <td><?php echo $idProducto?></td>
     <td><?php echo $row['cantidad']?></td>
     <td>$<?php echo $row['total']?></td>
     <td><?php echo $row['fecha']?></td>
     <td ><a href="../views/modificarFactura.php?codigo=<?php echo $row['codigo']; ?>">Editar</td>
     <td ><a href="../models/eliminarFactura.php?codigo=<?php echo $row['codigo']; ?>"><script>MensajeDelete();</script>Eliminar</td>
   </tr>

   <?php

  }

    ?>

    </form>

  </table>
	</p>
</div>

  <script type="text/javascript" src="../../public/js/validar.js"></script>

</body>
</html>
