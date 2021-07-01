<?php
//conexion a la Base de datos (Servidor,usuario,password)
$conn = mysqli_connect("localhost", "root", "", "relocadb");
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
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar Usuario</title>
</head>

<body>
    <div id="presenta">
        <header id="margenSuperior">
            <h1>Veterinaria "La casa de Boby"</h1>
            <nav id="menu">
                <ul>
                    <li><a href="ventanaPrincipalAdministrador.html">Home</a></li>
                    <li><a href="ventanaRegistrarUsuario.html">Registrar usuario</a></li>
                    <li><a href="ventanaConsultarUsuario.html">Consultar usuarios</a></li>
                    <li><a href="ventanaConsultarTodosUsuarios.html">Consultar todo usuarios</a></li>
                    <li><a href="ventanaActualizarUsuario.html">Actualizar usuario</a></li>
                    <li><a href="ventanaEliminarUsuario.html">Eliminar usuario</a></li>
                    <li><a href="..\index.html">SALIR</a></li>
                </ul>
            </nav>
        </header>

        <div class="clearfix"></div>
        <section class="form-register">
            <h4>Eliminar usuario</h4>
            <form action="eliminarUsuario.php" method="GET">
                <p>Sistema de Identificación</p>
                Ingresar DNI de persona a eliminar
                <p><Input class="controls" Type=Text name="DNI"></p>
                <Input class="controls" Type=Submit value="Buscar">
            </form>
        </section>
        <?php echo "<p>Usuario de DNI ",  $v2 ," eliminado</p>";?>
        <footer class="footer">
            <div class="redes">
                <h1>Redes</h1>
                <ul class="sociales">
                    <li><a href="FormRegistrarPerro.html"><img src="bxl-facebook-circle.svg" width="80" height="80"></a>
                    <li><a href="FormRegistrarPerro.html"><img src="bxl-youtube.svg" width="80" height="80"></a>
                </ul>
            </div>
        </footer>

</body>

</html>