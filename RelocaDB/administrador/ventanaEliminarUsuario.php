<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="estilosLateral.css">
  <title>Eliminar Usuario</title>
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
    <h4>Eliminar usuario</h4>
    <form action="eliminarUsuario.php" method="GET">
<p>Sistema de Identificación</p>
Ingresar DNI de persona a eliminar
<p><Input class="controls"  Type = Text name = "DNI" ></p>
<Input  class="controls" Type = Submit value = "Eliminar">
</form>
  </section>

</body>
</html>


