<?php
include("../config/conection.php");



if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM calificaciones WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Datos del estudiante eliminado de forma correcta';
  $_SESSION['message_type'] = 'danger';
  header('Location: calificaciones.php');
}