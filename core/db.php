<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'regiserUser';

$connect = mysqli_connect($servername, $username, $password, $dbname );

if(!$connect){
    die('connect filed' . mysqli_connect_error());
} else{}
?>