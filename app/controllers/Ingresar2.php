<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "farmacia";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn)
{
	die("No hay conexión: ".mysqli_connect_error());
}

$correo = $_POST["correo"];
$pass = $_POST["contrasena"];

$query = mysqli_query($conn,"SELECT * FROM usuario WHERE correo = '".$correo."' and contrasena = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: ../views/inicio.php");
	//echo "Bienvenido:" .$nombre;
}
else if ($nr == 0)
{
	header("Location: ../../public/index.html");
	?><br><br><a class="btn btn-primary" href="../../public/index.html"><button>Volver</button></a><?php
	//echo "No ingreso";
}



?>
