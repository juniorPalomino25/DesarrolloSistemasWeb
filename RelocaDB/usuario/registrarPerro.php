

<?php
session_start();
$Email = $_SESSION['Email'];
//conexion a la Base de datos (Servidor,usuario,password)
$conn = mysqli_connect("localhost", "root","", "relocadb");
if (!$conn) {
die("Error de conexion: " . mysqli_connect_error());
}
$v1 = $_REQUEST['Codigo'];

$sql = "INSERT INTO dueno (Email_Usuario, CodigoPerro) ";
$sql .= "VALUES ('$Email', '$v1')";

if (mysqli_query($conn, $sql)) {
    echo "<p>Ok, datos ingresados </p>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

//(nombre de la base de datos, $enlace) mysql_select_db("Relocadb",$link);
//capturando datos
$v1 = $_REQUEST['Codigo'];
$v2 = $_REQUEST['Nombre'];
$v3 = $_REQUEST['Raza'];
$v4 = $_REQUEST['Genero'];
$v5 = $_REQUEST['FechNac'];
$v6 = $_REQUEST['Foto'];
//conuslta SQL
$sql = "INSERT INTO perro (Codigo, Nombre, Raza, Genero, FechaNac, Foto) ";
$sql .= "VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', '$v6' )";
if (mysqli_query($conn, $sql)) {
echo "<p>Ok, datos ingresados </p>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
//Mensaje de conformidad

?>
<?php
  header("Location: ventanaRegistrarPerro.php");
?>