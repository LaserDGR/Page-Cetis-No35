<?php
include("../config/conection.php");

/*formulario de registro de calificaciones */

if (isset($_POST['save_score'])){
    $n_control = $_POST['n_control'];
    $nombre = $_POST['nombre'];
    $parcial1 = $_POST['parcial1'];
    $parcial2 = $_POST['parcial2'];
    $parcial3 = $_POST['parcial3'];
   /*  $promedio = $_POST['promedio'];
    $observacion = $_POST['observacion'];
    $asignatura = $_POST['asignatura']; */

    $query = "INSERT INTO calificaciones(n_control,nombre,parcial1,parcial2,parcial3) VALUES ('$n_control','$nombre','$parcial1','$parcial2', '$parcial3')";
   $result = mysqli_query($conn,$query);
if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Registro de calificaciones realizado de forma exitosa';
$_SESSION['message_type'] = 'success';
header("Location: ./calificaciones.php");
} 


?>