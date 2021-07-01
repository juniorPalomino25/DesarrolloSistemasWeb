<?php
//conexion a la Base de datos (Servidor,usuario,password)
$conn = mysqli_connect("localhost", "root","", "relocadb");
if (!$conn) {
die("Error de conexion: " . mysqli_connect_error());
}
//(nombre de la base de datos, $enlace) mysql_select_db("RelocaDB",$link);
//capturando datos
$v1 = $_REQUEST['Email'];
$v2 = $_REQUEST['DNI'];
$v3 = $_REQUEST['Contrasena'];
//conuslta SQL
$sql = "update usuario set Email='$v1', contrasena='$v3' where DNI='$v2'";
$result = mysqli_query($conn, $sql) or die("Error al actualizar. ");
mysqli_close($conn);
?>