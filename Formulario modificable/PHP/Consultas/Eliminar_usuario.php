<?php
//conexion a la Base de datos (Servidor,usuario,password)
$conn = mysqli_connect("localhost", "root","", "relocadb");
if (!$conn) {
die("Error de conexion: " . mysqli_connect_error());
}
//(nombre de la base de datos, $enlace) mysql_select_db("RelocaDB",$link);
//capturando datos
$v2 = $_REQUEST['DNI'];
//conuslta SQL
$sql = "delete from usuario where DNI = '$v2'";
$result = mysqli_query($conn, $sql) or die("Error al eliminar los datos. ");
mysqli_close($conn);
if($result ) {
    echo "Operacion terminada";
}
?>