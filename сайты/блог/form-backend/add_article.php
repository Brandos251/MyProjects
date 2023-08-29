<?php
// получаем данные из формы в переменные
    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
    $begin_article = trim(filter_var($_POST['begin_article'], FILTER_SANITIZE_STRING));
    $text_article = trim(filter_var($_POST['text_article'], FILTER_SANITIZE_STRING));

    // проверяем длину, если она <= 3 символов, то выходм
    $error = "";
    if(strlen($title) <= 3){
        $error = "Введите название статьи";
    }else if(strlen($begin_article) <= 3){
        $error = "Введите описание статьи";
    }else if(strlen($text_article) <= 3){
        $error = "Введите текст";
    }

    // если есть ошибка, то код не выполняется
    if(!empty($error)){
        echo $error;
        exit();
    }else{
        // если ошибок нет, то выводим в success блок
        echo "Готово";
    }

    // подключение к бд
    require_once '../database_connection.php';

    // заполняем таблицу
    $sql = 'INSERT INTO articles(title, begin_article, text_article, date, author) VALUES(?, ?, ?, ?, ?)';

    // создаем запрос
    $query = $pdo->prepare($sql);

    // выполняем запрос
    $query->execute([$title, $begin_article, $text_article, time(), $_COOKIE['log']]);
?>

