<?php
require_once ('core/db.php');
session_start();

$login = $_POST['login'];
$pass = $_POST['pass'];

if(empty($login) || empty($pass))
{
    $_SESSION['messageLogin'] = 'Заполните все поля!!';
    header('Location: ../register.php');
} else{
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $connect->query($sql);
    $_SESSION['nLogin'] = $login;
    header('Location: ../feedback.php');

    if($result->num_rows > 0) {
    }else {
        $_SESSION['messageLogin'] = 'Такого пользователя не существует';
        header('Location: ../register.php');
    }
}