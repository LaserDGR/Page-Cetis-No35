<?php
$user=$_POST['user'];
$password=$_POST['password'];
session_start();
$_SESSION['user']=$user;

$conn=mysqli_connect("localhost","root","","cetis35");

$query="SELECT * FROM auth where user='$user' and password='$password'";
$result=mysqli_query($conn,$query);

$rows=mysqli_fetch_array($result);

if($rows['id_cargo']==1){ //administrador
    header("location: index.html");

}else
if($rows['id_cargo']==2){ //usuario
header("location: pages/calificaciones.php");
}

else
if($rows['id_cargo']==3){ //tecnico
header("location: pages/calificaciones.php");
}


else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($result);
mysqli_close($conn);