<?php

session_start();

$conn =mysqli_connect(
    'localhost',
    'id20920949_laser',
    'G@rh980326',
    'id20920949_cetis35'
);


if(isset($conn)){
    echo 'is connected';
}
?>
