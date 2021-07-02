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
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="estilosLateral.css">
  <title>Actualizar Registro Usuario</title>
</head>
<body>
<div class="perfil">
    <?php
    session_start();
      $Email = $_SESSION['Email'];
    ?>
    </div>
<div id="presenta">
    <header class="header">
      <div class="container">
      <div class="btn-menu">
        <label for="btn-menu">☰</label>
      </div>
        <div class="logo">
          <h1>Logotipo</h1>
        </div>
          <nav class="menu">
          <a href=""> <?php echo $Email ?></a>
          <a href="..\index.html">Salir</a>
          </nav>
        </div>
    </header>
    <div class="capa"></div>
    <!--	--------------->
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
      <div class="cont-menu">
        <nav>
        <a href="ventanaPrincipalAdministrador.php">Home</a>
          <a href="ventanaRegistrarUsuario.php">Registrar usuario</a>
          <a href="ventanaConsultarUsuario.php">Consultar usuarios</a>
          <a href="ventanaConsultarTodosUsuarios.php">Consultar todo usuarios</a>
          <a href="ventanaActualizarUsuario.php">Actualizar usuario</a>
          <a href="ventanaEliminarUsuario.php">Eliminar usuario</a>
        </nav>
        <label for="btn-menu">✖️</label>
      </div>
    </div>
  
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
        </form>
  </section>
  
 
        <div class="contTabla">
        <?php echo "<p>Datos actualizados: </p>";?>
            <table>
                <thead>
                    <tr>
                        <td>Email</td>
                        <td>Contrasena</td>
                        <td>DNI</td>
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
        

</body>
</html>
