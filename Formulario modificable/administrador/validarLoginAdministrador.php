<?php
$conexion=mysqli_connect("localhost", "root","", "relocadb");
$Email=$_POST['Email'];
$Contrasena=$_POST['Contrasena'];
session_start();
$_SESSION['Email']=$Email;


$conexion=mysqli_connect("localhost", "root","", "relocadb");

$consulta="SELECT*FROM administrador where Email='$Email' and Contrasena='$Contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  ?>
  <h1>BIENVENIDO ADMINISTRADOR</h1>
  <?php
  header("Location: VentanaPrincipalAdministrador.html");
}else{
  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
<?php
}
  mysqli_free_result($resultado);
  mysqli_close($conexion);