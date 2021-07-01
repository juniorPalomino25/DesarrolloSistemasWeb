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

$sql = "select * from usuario where DNI like '" . $v2 . "'";
$result = mysqli_query($conn, $sql);
//cuantos reultados hay en la busqueda
$num_resultados = mysqli_num_rows($result);
mysqli_close($conn);
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Actualizar Registro Usuario</title>
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
    <h4>Actualizar Usuario</h4>
    <form  action="actualizarUsuario.php" method="GET">
        Sistema de Identificacion Persona</p>
        Ingresar Email
        <Input class="controls" name = "Email"  placeholder="Email" Type Text></P>
        Ingresar Contraseña
        <Input class="controls" name = "Contrasena"  placeholder="Contrasena" Type Text></P>
        Ingresar DNI
        <Input class="controls" name = "DNI"  placeholder="DNI" Type Text></P>
        <!--Ingresar Nombres
        <Input class="controls" name = "Nombres" placeholder="Nombres" Type Text></P>
        Ingresar Apellido Paterno
        <Input class="controls" name = "ApellidoP" placeholder="ApellidoP" Type Text></P>
        Ingresar Apellido Materno
        <Input class="controls" name = "ApellidoM" placeholder="ApellidoM" Type Text></P>
        Fecha de Nacimiento
        <Input  class="controls" name= "FechNac" placeholder="FechNac" Type = "Date"></P>
        Genero
        <Select class="controls" placeholder="Genero" name = "Genero">
          <Option value = "Masculino"> Masculino
          <Option value = "Femenino"> Femenino
        </Select></P> -->
        <Input class="botons" name= "Actualizar" Type = Submit value = "Actualizar">
        <Input class="botons" Type = Submit value = "Cancelar"></P>
        </form>
  </section>
  
  <?php echo "<p>Datos actualizados: </p>";?>
        <div class="contTabla">
            <table>
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Contrasena</th>
                        <th>DNI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < $num_resultados; $i++) {
                        $row = mysqli_fetch_array($result); ?>
                        <tr>
                            <td><?php echo $row["Email"]; ?></td>
                            <td><?php echo $row["Contrasena"] ?></td>
                            <td><?php echo $row["DNI"] ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
        
  <footer class="footer">
    <div class="redes">
      <h1>Redes</h1>
      <ul class="sociales">
        <li><a href=""><img src="bxl-facebook-circle.svg" width="80" height="80"></a>
        <li><a href=""><img src="bxl-youtube.svg" width="80" height="80"></a>
      </ul>
    </div>
  </footer>

</body>
</html>
