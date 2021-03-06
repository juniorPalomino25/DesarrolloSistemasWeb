<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <title>Formulario Registro Usuario</title>
</head>
<body>
    <div id="presenta">
      <header id="margenSuperior">
        <h1>Veterinaria "La casa de Boby"</h1>
        <nav id="menu">
          <ul>
            <li><a href="..\index.html">Login</a></li>
          </ul>
        </nav>
      </header>
  
        <div class="clearfix"></div>
  <section class="form-register">
    <h4>Registrar al usuario</h4>
    <form  action="registrarUsuario.php" method="GET" onsubmit="return validar();">
        Sistema de Identificacion Persona</p>
        Ingresar Email
        <Input class="controls" name = "Email"  placeholder="Email" Type Text></P>
        Ingresar Contraseña
        <Input class="controls" name = "Contrasena"  placeholder="Contrasena" Type Text></P>
        Ingresar DNI
        <Input class="controls" name = "DNI"  placeholder="DNI" Type Text></P>
        Ingresar Nombres
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
        </Select></P>
        <Input class="botons" name= "Registrar" Type = Submit value = "Registrar">
        </form>
  </section>
  
  <footer class="footer2">
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
