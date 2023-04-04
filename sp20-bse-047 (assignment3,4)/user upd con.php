<?php


$host = 'localhost';
$user = 'root';
$pas = '';
$db = 'userr';

$connection = mysqli_connect($host, $user, $pas, $db);

if ($connection) {
    echo 'success <br>';
} else {
    echo 'connection failed';
}