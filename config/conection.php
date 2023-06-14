<?php

session_start();

$conn =mysqli_connect(
    'localhost',
    'root',
    '',
    'cetis35'
);

if(isset($conn)){
    echo 'is connected';
}
?>
