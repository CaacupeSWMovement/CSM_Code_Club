<?php 

$nombre = $_POST['nombre']; 
$contacto = $_POST['contacto'];
$direccion = $_POST['direccion'];

$con = mysqli_connect('localhost','root','user','CSM');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con);
$sql = "INSERT INTO clientes (cli_nombre, cli_contacto, cli_direccion) VALUES ('$nombre', '$contacto', '$direccion')";
$result = mysqli_query($con,$sql);

echo "guardado"; 

mysqli_close($con);

?>