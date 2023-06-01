<?php
require_once ('core/db.php');
session_start();

$login = $_POST['login'];
$pass = $_POST['pass'];
$passconfirm = $_POST['passconfirm'];
$email = $_POST['email'];


if(empty($login) || empty($pass) || empty($passconfirm) || empty($email)) {
    $_SESSION['message'] = 'Заполните все поля';
    header('Location: ../register.php');
} else{
    if($pass != $passconfirm){
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }
    else{
        $sql = "INSERT INTO `users` (`id`, `login`, `pass`, `email`) VALUES (NULL, '$login', '$pass', '$email')";
        if($connect -> query($sql)) {
            $_SESSION['message'] = 'Успешная регистрация!';
            header('Location: ../register.php');
        }
        else{
            echo 'Failed' . mysqli_connect_error();
        }
    }
}
