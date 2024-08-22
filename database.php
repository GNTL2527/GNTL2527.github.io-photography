<?php
$HOST = 'localhost';
$USER = 'root';
$PASSWORD = 'root';
$DATABASE = '';
$PORT = 3306;

$CONNECTION = mysqli_connect($HOST, $USER, $PASSWORD, $DATABASE, $PORT);
if (mysqli_connect_error()) {
    echo 'cannot connect to the database <br>';
    echo 'Message:' . mysqli_connect_error() . '<br>';
}
