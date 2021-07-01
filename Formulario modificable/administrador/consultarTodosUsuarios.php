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
  
  <?php echo "<p>Todos los usuarios: </p>";?>
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
