<?php 

$nombre = $_POST['nombre']; 

$con = mysqli_connect('localhost','root','','CSM');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con);
$sql="SELECT * FROM clientes WHERE cli_nombre LIKE '%".$nombre."%'";
$result = mysqli_query($con,$sql);

echo "<table class='table'>
<tr class='success'>
	<th>Nombre y Apellido</th>
	<th>Contacto</th>
	<th>Dirección</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['cli_nombre'] . "</td>";
    echo "<td>" . $row['cli_contacto'] . "</td>";
    echo "<td>" . $row['cli_direccion'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>
