<?php
$datos_bd = mysqli_connect("localhost","root","","tres_pibesalpe") or exit ("No se puede conectar con la Base de datos");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id_nombre = $POST ["id_nombre"];
    
    //preparar y ejecutar la consulta para eliminar el registro por su id
    $eliminar = "DELETE FROM tres_pibesalpe WHERE id_nombre = 1";
    if (mysqli_query($datos_bd,$eliminar)){
        echo "registro borrado exitosamente";
    } else {
        echo "error al borrar el registro:". mysqli_error($datos_bd);
    }
}
?>