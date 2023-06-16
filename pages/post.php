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


if (isset($_POST['save_register'])) {
    $name = $_POST['name'];
    $ci = $_POST['ci'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $rol = $_POST['rol'];
    $password = $_POST['password'];
    $auth = $_POST['auth'];
    $id_cargo = $_POST['id_cargo'];

    $query = "INSERT INTO auth(name, ci, user, email, rol, password, auth, id_cargo) VALUES ('$name', '$ci', '$user', 
    ,'$password','$email', '$rol', '$auth', '$id_cargo')";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Registro de usuario realizado de forma exitosa';
    $_SESSION['message_type'] = 'success';
    header("Location: ./register.php");
}



?>