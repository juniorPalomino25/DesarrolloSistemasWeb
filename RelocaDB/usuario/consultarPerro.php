<?php
//conexion a la Base de datos (Servidor,usuario,password)
$conn = mysqli_connect("localhost", "root", "", "relocadb");
if (!$conn) {
    die("Error de conexion: " . mysqli_connect_error());
}
//(nombre de la base de datos, $enlace) mysql_select_db("RelocaDB",$link);
//capturando datos
$v2 = $_REQUEST['Nombre'];
//conuslta SQL
$sql = "select * from perro where Nombre like '" . $v2 . "'";
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
    <title>Consultar can</title>
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
          <a href="ventanaPrincipalUsuario.php">Home</a>
          <a href="ventanaRegistrarPerro.php">Registrar Perro</a>
          <a href="ventanaConsultarPerro.php">Consultar perros</a>
        </nav>
        <label for="btn-menu">✖️</label>
      </div>
    </div>

        <div class="clearfix"></div>
        <section class="form-register">
            <h4>Consultar can</h4>
            <form action="consultarPerro.php" method="GET">
                <p>Sistema de Identificación Perruno</p>
                Ingresar Nombre a buscar
                <p><Input class="controls" Type=Text name="Nombre"></p>
                <Input class="controls" Type=Submit value="Buscar">
            </form>
        </section>
        <div class="contTabla">
        <?php echo "<p>Número de perros encontrados: " . $num_resultados . "</p>";?>
            <table >
                <thead>
                    <tr>
                        <td>Codigo</td>
                        <td>Nombre</td>
                        <td>Raza</td>
                        <td>Genero</td>
                        <td>FechaNacimiento</td>
                        <td>Foto</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < $num_resultados; $i++) {
                        $row = mysqli_fetch_array($result); ?>
                        <tr>
                            <td><?php echo $row["Codigo"]; ?></td>
                            <td><?php echo $row["Nombre"] ?></td>
                            <td><?php echo $row["Raza"] ?></td>
                            <td><?php echo $row["Genero"] ?></td>
                            <td><?php echo $row["FechaNac"] ?></td>
                            <td><?php echo $row["Foto"] ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

        <footer class="footer2">
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