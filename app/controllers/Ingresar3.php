<?php
    include("../../config/conexion.php");

    if(isset($_POST['guardar'])){
      $Nombre = ($_POST['nombre']);
      $Correo = ($_POST['correo']);
      $Contrasena=($_POST['contrasena']);
      
      $sql="INSERT INTO usuario(nombre, correo, contrasena) VALUES ('$Nombre','$Correo','$Contrasena')";
      $consulta="SELECT * FROM usuario";
      $resultado=$mysqli->query($sql);

      if($conexion->query($sql) === true){
	  echo '<table border="2px"><tr><td>'.$row['nombre'].'</td><td>'.$row['correo'].'</td><td>'.$row['contrasena'].'</td></tr></table>';
	}

      if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){
	}
      }
    }
?>

