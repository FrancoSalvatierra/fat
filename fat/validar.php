<?php
include("otraconexion.php")
$nombre = $_POST['usuario'];
$password = $_POST['password'];

$consulta = SELECT `contraseña` FROM `login`;
mysqli_query ($datos_bd,$consulta);
    
$log_consult= mysqli_query ($datos_bd,"SELECT `nombre_usuario`, `contraseña` FROM `login` WHERE 1");
$lista_consulta= mysqli_fetch_assoc ($log_consult);

if $lista_consulta["nombre_usuario"]==$_POST["usuario"]{
  echo "Hola";
}
else {
  echo "no";
}


?>