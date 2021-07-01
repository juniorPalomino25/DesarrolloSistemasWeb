

<?php

//conexion a la Base de datos (Servidor,usuario,password)
$conn = mysqli_connect("localhost", "root","", "relocadb");
if (!$conn) {
die("Error de conexion: " . mysqli_connect_error());
}



//(nombre de la base de datos, $enlace) mysql_select_db("Relocadb",$link);
//capturando datos
$v1 = $_REQUEST['DNI'];
$v2 = $_REQUEST['Nombres'];
$v3 = $_REQUEST['ApellidoP'];
$v4 = $_REQUEST['ApellidoM'];
$v5 = $_REQUEST['FechNac'];
$v6 = $_REQUEST['Genero'];
//conuslta SQL
$sql = "INSERT INTO persona (DNI, Nombres, ApellidoP, ApellidoM, FechNac, Genero) ";
$sql .= "VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', '$v6' )";
if (mysqli_query($conn, $sql)) {
echo "<p>Ok, datos ingresados </p>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



//(nombre de la base de datos, $enlace) mysql_select_db("Relocadb",$link);
//capturando datos
$v8 = $_REQUEST['Email'];
$v7 = $_REQUEST['Contrasena'];
$v1 = $_REQUEST['DNI'];
//conuslta SQL
$sql = "INSERT INTO usuario (Email, Contrasena, DNI) ";
$sql .= "VALUES ('$v8', '$v7', '$v1')";
if (mysqli_query($conn, $sql)) {
echo "<p>Ok, datos ingresados </p>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
//Mensaje de conformidad

?>