<?php

$hostlocal = '127.0.0.1';
$hosternasis = '192.168.1.102';
$databaseName = 'PJJ';
$databaseUsername = 'pjj';
$databasePassword = 'password';

$mysqli = mysqli_connect($hosternasis, $databaseUsername, $databasePassword, $databaseName); 

if (!$mysqli) {
    die("Error" . mysqli_connect_error());
}
?>