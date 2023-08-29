<?php
// получаем данные из формы в переменные
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

    // хешируем пароль и усиливаем защиту при помощи "соли"
    $salt = "pdfgkpkfdmgkm123134";
    $hashedPassword = md5($password . $salt);

    // подключение к бд
    require_once '../database_connection.php';

    // проверяем длину, если она <= 3 символов, то выходм
    $error = "";
    if(strlen($username) <= 3){
        $error = "Введите имя";
    }else if(strlen($email) <= 3){
        $error = "Введите Email";
    }else if(strlen($login) <= 3){
        $error = "Введите логин";
    }else if(strlen($password) <= 3){
        $error = "Введите пароль";
    }

    // Проверка на существование пользователя с таким логином
    $checkUserQuery = 'SELECT COUNT(*) FROM user_profiles WHERE login = ?';
    $checkUserStatement = $pdo->prepare($checkUserQuery);
    $checkUserStatement->execute([$login]);
    $userExists = $checkUserStatement->fetchColumn();

    if ($userExists) {
        $error = "Пользователь с таким логином уже существует";
    }

    // если есть ошибка, то код не выполняется
    if(!empty($error)){
        echo $error;
        exit();
    }else{
        // если ошибок нет, то выводим в success блок
        echo "Готово";
    }


    // заполняем таблицу
    $sql = 'INSERT INTO user_profiles(name, email, login, password) VALUES(?, ?, ?, ?)';

    // создаем запрос
    $query = $pdo->prepare($sql);

    // выполняем запрос
    $query->execute([$username, $email, $login, $hashedPassword]);
    


?>

