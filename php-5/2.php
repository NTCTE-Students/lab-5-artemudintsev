<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    if (empty($name) || empty($email) || empty($message)) {
        echo "Ошибка: Все поля должны быть заполнены!";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Ошибка: Некорректный формат электронной почты!";
        exit;
    }

    if (strlen($message) < 10) {
        echo "Ошибка: Сообщение должно содержать минимум 10 символов!";
        exit;
    }

    echo "Сообщение успешно отправлено!";
}