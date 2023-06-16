<?php
include("../config/conection.php");


/*formulario de registro de calificaciones */



if (isset($_POST['save_score'])){
    $n_control = $_POST['n_control'];
    $nombre = $_POST['nombre'];
    $parcial1 = $_POST['parcial1'];
    $parcial2 = $_POST['parcial2'];
    $parcial3 = $_POST['parcial3'];
    $carrera = $_POST['carrera'];
    $materia = $_POST['materia'];
    $grupo = $_POST['grupo'];


    $promedio = ($parcial1 + $parcial2 + $parcial3) / 3;
    $estado = ($promedio >= 6) ? 'Aprobado ✅' : 'Reprobado ❌';


    $query = "INSERT INTO calificaciones(n_control,nombre,parcial1,parcial2,parcial3,promedio,estado,carrera,materia,grupo) VALUES ('$n_control','$nombre','$parcial1','$parcial2', '$parcial3', '$promedio', '$estado','$carrera','$materia','$grupo')";


    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'Registro de calificaciones realizado de forma exitosa';
    $_SESSION['message_type'] = 'success';
    header("Location: ./calificaciones.php");
}


if (isset($_POST['save_user'])) {
    $name = $_POST['name'];
    $ci = $_POST['ci'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $rol = $_POST['rol'];
    $auth = $_POST['auth'];

    $query = "INSERT INTO users(name, ci, username, email, rol, auth) VALUES ('$name', '$ci', '$username', '$email', '$rol', '$auth')";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Registro de usuario realizado de forma exitosa';
    $_SESSION['message_type'] = 'success';
    header("Location: ./users.php");
}



?>