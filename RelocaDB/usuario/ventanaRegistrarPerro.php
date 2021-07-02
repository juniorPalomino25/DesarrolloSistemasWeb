<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="estilosLateral.css">
  <title>Formulario Registro Perro</title>
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
    <h4>Registrar al can</h4>
    <form action="registrarPerro.php" method="GET">
        Sistema de Identificacion Perruno</p>
        Ingresar Codigo
        <Input class="controls" name = "Codigo"  placeholder="Codigo" Type Text></P>
        Ingresar Nombre
        <Input class="controls" name = "Nombre" placeholder="Nombre" Type Text></P>
        Fecha de Nacimiento
        <Input  class="controls" name= "FechNac" placeholder="FechaNac" Type = "Date"></P>
        Genero
        <Select class="controls" placeholder="Genero" name = "Genero">
          <Option value = "Macho"> Macho
          <Option value = "Hembra"> Hembra
        </Select></P>
        Seleccione Raza
        <Select class="controls" placeholder="Raza" name = "Raza">
        <Option value = "-------"> -------
        <Option value = "Pitbull"> Pitbull
        <Option value = "Bulldog"> Bulldog
        <Option value = "Shichu"> Shichu
        <Option value = "Pequines"> Pequines
        <Option value = "San Bernardo"> San Bernardo
        <Option value = "Chiguahua"> Chiguahua
        </Select></P>
        Subir Foto
        <Input class="controls" Type = "file" name = "Foto">
        <Input class="botons" name= "Registrar" Type = Submit value = "Registrar">
        </form>
  </section>
  
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
