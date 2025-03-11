<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $date = htmlspecialchars(trim($_POST["date"]));
    $time = htmlspecialchars(trim($_POST["time"]));

    if (empty($name) || empty($date) || empty($time)) {
        echo "Ошибка: Все поля должны быть заполнены!";
        exit;
    }

    if (strlen($name) < 2) {
        echo "Ошибка: Имя должно содержать минимум 2 символа!";
        exit;
    }

    if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $date)) {
        echo "Ошибка: Некорректный формат даты!";
        exit;
    }

    if (!preg_match("/^\d{2}:\d{2}$/", $time)) {
        echo "Ошибка: Некорректный формат времени!";
        exit;
    }

    if (strtotime($date) < strtotime(date("Y-m-d"))) {
        echo "Ошибка: Нельзя выбрать прошедшую дату!";
        exit;
    }

    echo "Бронирование успешно оформлено на $date в $time!";
}