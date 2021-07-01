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
$sql = "select * from usuario where DNI like '".$v2."'";
$result = mysqli_query($conn, $sql);
//cuantos reultados hay en la busqueda
$num_resultados = mysqli_num_rows($result);
echo "<p>Número de personas encontradas: ".$num_resultados."</p>";
//mostrando informacion de los perros y detalle
for ($i=0; $i <$num_resultados; $i++) {
$row = mysqli_fetch_array($result); echo ($i+1);
echo " Email : ".$row["Email"];
echo " </br>DNI: ".$row["DNI"];
echo "</p>";
}
?>