<?php
    session_start();
    if (!isset($_SESSION['nLogin']))
        header("Location: ../register.php");
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Форма обратной связи</title>
</head>
<body>
    <form action="mail.php" method="post">
        <?php
        if (isset($_SESSION['messageSend'])) {
            echo '<p class="msgSend"> ' . $_SESSION['messageSend'] . ' </p>';
        }
        unset($_SESSION['messageSend']);
        ?>
        <div class="form-group">
            <label for="name">Ваше имя:</label>
            <input type="name" name="name" class="form-control" id="name" placeholder="Имя">
        </div>
        <div class="form-group">
            <label for="email1">E-mail:</label>
            <input type="email" name="email" class="form-control" id="email1" placeholder="Почта">
        </div>
        <div class="form-group">
            <label for="message">Сообщение:</label>
            <textarea class="form-control" name="message" rows="3" placeholder="Здравствуйте, ..."></textarea>
        </div>
        <button type="submit" class="btn btn-info">Отправить сообщение</button>
    </form>
    <form>
        <div>
            <input class="form-check-input" type="checkbox" id="checkbox" value="1">
            <label class="form-check-label" for="Check1">
                Флажок1
            </label>
            <input class="form-check-input" type="checkbox" id="checkbox" value="2">
            <label class="form-check-label" for="Check2">
                Флажок2
            </label>
            <input class="form-check-input" type="checkbox" id="checkbox" value="3">
            <label class="form-check-label" for="Check3">
                Флажок3
            </label>
        </div>

        <div>
            <input class="form-check-input" type="radio" name="radio" id="radio1" value="1">
            <label class="form-check-label" for="flexRadio1">
                1
            </label>
            <input class="form-check-input" type="radio" name="radio" id="radio2" value="2">
            <label class="form-check-label" for="flexRadio2">
                2
            </label>
            <input class="form-check-input" type="radio" name="radio" id="radio3" value="3">
            <label class="form-check-label" for="flexRadio3">
                3
            </label>
        </div>
        <div class="selectItems">
            <select class="form-select" aria-label="Пример выбора по умолчанию">
                <option selected>Откройте это меню выбора</option>
                <option value="1">Один</option>
                <option value="2">Два</option>
                <option value="3">Три</option>
            </select>
        </div>
    </form>
</body>
</html>