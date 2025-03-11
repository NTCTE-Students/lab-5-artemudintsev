<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST["username"]));
    $password = htmlspecialchars(trim($_POST["password"]));

    if (empty($username) || empty($password)) {
        echo "Ошибка: Все поля должны быть заполнены!";
        exit;
    }

    if (strlen($username) < 4) {
        echo "Ошибка: Имя пользователя должно содержать минимум 4 символа!";
        exit;
    }

    echo "Вход выполнен успешно!";
}