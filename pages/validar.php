<?php

$message = '';
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = htmlspecialchars($_POST['user']);
    $password = htmlspecialchars($_POST['password']);
    
    // Validar los datos de entrada
    if (!empty($user) && !empty($password)) {
      
      // Conectar a la base de datos y comprobar las credenciales del usuario
      $servername = "localhost";
      $username = "root";
      $dbpassword = "";
      $dbname = "cetis35";
      
      $conn = new mysqli($servername, $username, $dbpassword, $dbname);
      
      if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
      }
      
      $stmt = $conn->prepare("SELECT password FROM auth WHERE user = ?");
      $stmt->bind_param("s", $user);
      $stmt->execute();
      $stmt->bind_result($hashed_password);
      $stmt->fetch();
      
      // Utilizar un hash para la contraseña
      if (password_verify($password, $hashed_password)) {
        session_start();
        $_SESSION['user'] = $user;
        header("Location: calificaciones.php");
        exit();
      } else {
        $message = "Usuario o contraseña incorrectos";
      }
      
      $stmt->close();
      $conn->close();
      
    } else {
      $message = "Por favor, ingrese su usuario y contraseña";
    }
  }
?>