<?php
//conexion a la Base de datos (Servidor,usuario,password)
$conn = mysqli_connect("localhost", "root","", "relocadb");
if (!$conn) {
die("Error de conexion: " . mysqli_connect_error());
}
//conuslta SQL
$sql = "select * from usuario ";
$result = mysqli_query($conn, $sql);
//cuantos reultados hay en la busqueda
$num_resultados = mysqli_num_rows($result);
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
          <h1>Veterinaria "La casa de Boby"</h1>
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
    <h4>Consultar todos los usuarios</h4>
    <form action="consultarTodosUsuarios.php" method="GET">
<p>Sistema de Identificación </p>
<Input  class="controls" Type = Submit value = "Buscar">
</form>
  </section>
        <div class="contTabla">
        <?php echo "<p>Todos los usuarios: </p>";?>
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
                    echo "<p>Número de personas encontradas: ".$num_resultados."</p>";
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
