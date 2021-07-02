<?php
//conexion a la Base de datos (Servidor,usuario,password)
$conn = mysqli_connect("localhost", "root","", "relocadb");
if (!$conn) {
die("Error de conexion: " . mysqli_connect_error());
}
//(nombre de la base de datos, $enlace) mysql_select_db("RelocaDB",$link);
//capturando datos
$v2 = $_REQUEST['DNI'];
$num_resultados_Perro =0;
$num_resultados_Duenos =0;
$num_resultados_Persona=0;

$sql = "select * from usuario where DNI like '".$v2."'";
$result = mysqli_query($conn, $sql);
//cuantos reultados hay en la busqueda
$num_resultados = mysqli_num_rows($result);


$resultDatosUsuario = mysqli_query($conn, $sql);
//cuantos reultados hay en la busqueda
$num_resultados_Usuario  = mysqli_num_rows($resultDatosUsuario);

if($num_resultados >=1){
  $sql = "select * from persona where DNI like '".$v2."'";
  $resultDatosPersona = mysqli_query($conn, $sql);
  //cuantos reultados hay en la busqueda
  $num_resultados_Persona = mysqli_num_rows($resultDatosPersona);
  if($num_resultados_Persona>=1){
    $row = mysqli_fetch_array($resultDatosUsuario);
    $Email_temporal = $row["Email"];
    $sql = "select CodigoPerro from dueno where Email_Usuario like '".$Email_temporal."'";
    $resultDatosDueno = mysqli_query($conn, $sql);
    //cuantos reultados hay en la busqueda
    $num_resultados_Dueno = mysqli_num_rows($resultDatosDueno);
    if( $num_resultados_Dueno >=1){
        $row = mysqli_fetch_array($resultDatosDueno); 
        $perro = $row["CodigoPerro"];
        $sql = "select * from perro where Codigo like '".$perro."'";
        $resultDatosPerro = mysqli_query($conn, $sql);
        $num_resultados_Perro = mysqli_num_rows($resultDatosPerro);
      }
      //cuantos reultados hay en la busqueda
      
    }
}


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
    <h4>Consultar usuario</h4>
    <form action="consultarUsuario.php" method="GET">
<p>Sistema de Identificación</p>
Ingresar DNI a buscar
<p><Input class="controls"  Type = Text name = "DNI" ></p>
<Input  class="controls" Type = Submit value = "Buscar">
</form>
  </section>
  
        <div class="contTabla">
        
                <br/>
                
                <table>
                <?php
                if($num_resultados_Persona>=1){?>
                <?php echo "<p>Datos Persona: </p>";?>
                <br/>
                <thead>
                    <tr>
                        <td>DNI</td>
                        <td>Nombres</td>
                        <td>ApellidoP</td>
                        <td>ApellidoM</td>
                        <td>FechaNac</td>
                        <td>Genero</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      for ($i = 0; $i < $num_resultados_Persona; $i++) {
                          $row = mysqli_fetch_array($resultDatosPersona); ?>
                          <tr>
                              <td><?php echo $row["DNI"]; ?></td>
                              <td><?php echo $row["Nombres"] ?></td>
                              <td><?php echo $row["ApellidoP"] ?></td>
                              <td><?php echo $row["ApellidoM"] ?></td>
                              <td><?php echo $row["FechNac"] ?></td>
                              <td><?php echo $row["Genero"] ?></td>
                          </tr>
                      <?php } }?>
                  </tbody> 
                </table>   
                  <br/>
                  <?php echo "<p>Datos de Usuario: </p>";?>
            <table>
            <br/>
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
                <br/>
                <table>
                <?php
                if($num_resultados_Perro>=1){?>
                <?php echo "<p>Datos de los perros de la persona: </p>";?>
                <br/>
                  <thead>
                    <tr>
                        <td>Codigo</td>
                        <td>Nombre</td>
                        <td>Raza</td>
                        <td>Genero</td>
                        <td>FechaNac</td>
                        <td>Foto</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      for ($i = 0; $i < $num_resultados_Perro; $i++) {
                          $row = mysqli_fetch_array($resultDatosPerro); ?>
                          <tr>
                              <td><?php echo $row["Codigo"]; ?></td>
                              <td><?php echo $row["Nombre"] ?></td>
                              <td><?php echo $row["Raza"] ?></td>
                              <td><?php echo $row["Genero"] ?></td>
                              <td><?php echo $row["FechaNac"] ?></td>
                              <td><?php echo $row["Foto"] ?></td>
                          </tr>
                        <?php } }?>
                    </tbody> 

                    <br/>
                </table> 
                
            
        </div>
        

</body>
</html>
