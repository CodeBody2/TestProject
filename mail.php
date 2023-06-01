<?php
session_start();
$to = "mail@mail.ru";
$theme = "Форма обратной связи";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$mes = "Имя: $name \nE-mail: $email \nТема: $theme \nТекст: $message";
$send = mail($to, $theme, $mes, "Content-type:text/plain; charset = UTF-8\r\n");
if ($send == 'true') {
    $_SESSION['messageSend'] = 'Успешно отправлено!';
    header('Location: ../feedback.php');
} else {
    $_SESSION['messageSend'] = 'Увы! Ничего не вышло!';
    die();
}