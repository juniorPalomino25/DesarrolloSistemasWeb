<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="estilosLateral.css">
  <title>LOGIN USUARIO</title>
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
