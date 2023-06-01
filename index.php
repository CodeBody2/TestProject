<?php
session_start();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--form-->
    <form action="register.php" method="post">
        <label>Регистрация</label>
        <input type="text" placeholder="login" name="login">
        <input type="text" placeholder="password" name="pass">
        <input type="text" placeholder="password confirm" name="passconfirm">
        <input type="text" placeholder="email" name="email">
        <button type="submit">Зарегистрироваться</button>
        <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="msgReg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>

    <form action="login.php" method="post" name="logForm">
        <label>Вход</label>
        <input type="text" placeholder="login" name="login">
        <input type="password" placeholder="password" name="pass">
        <button type="submit">Войти</button>
        <?php
        if (isset($_SESSION['messageLogin'])) {
            echo '<p class="msgLog"> ' . $_SESSION['messageLogin'] . ' </p>';
        }
        unset($_SESSION['messageLogin']);
        ?>
    </form>
</body>
</html>
