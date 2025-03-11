<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST["email"]));

    if (empty($email)) {
        echo "Ошибка: Введите электронную почту!";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Ошибка: Некорректный формат электронной почты!";
        exit;
    }

    echo "Вы успешно подписаны на рассылку!";
}