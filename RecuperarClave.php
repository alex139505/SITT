<?php
  //conectamos Con el servidor
  $conectar=mysqli_connect('localhost','root','','documento');
  //verificamos la conexion
if(!$conectar){
die("Error en la conexion:".mysqli_connect_error());
}
$usuario=$_POST['usuario'];
$q_admin = $conectar->query("SELECT * FROM `usuario` WHERE `usuario` = '$usuario'") or die(mysqli_error());
$v_admin = $q_admin->num_rows;
    if($v_admin == 1){
     header("location:CambiarContraseña.php");
      }else{
      echo '
        <script type = "text/javascript">
          alert("El usuario no existe");
          window.location = "Recuperar.php";
        </script>
      ';
    }
?>