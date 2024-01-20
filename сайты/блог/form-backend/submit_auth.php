<?php
// получаем данные из формы в переменные
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

    // проверяем длину, если она <= 3 символов, то выходм
    $error = "";
    if(strlen($login) <= 3){
        $error = "Введите логин";
    }else if(strlen($password) <= 3){
        $error = "Введите пароль";
    }

    // если есть ошибка, то код не выполняется
    if(!empty($error)){
        echo $error;
        exit();
    }

    // хешируем пароль и усиливаем защиту при помощи "соли"
    $salt = "pdfgkpkfdmgkm123134";
    $hashedPassword = md5($password . $salt);
   
    // подключение к бд
    require_once '../database_connection.php';

    // производим выборку из бд
    $sql = 'SELECT id FROM user_profiles WHERE login = :login && password = :password';

    // создаем запрос
    $query = $pdo->prepare($sql);

    // выполняем запрос
    $query->execute(['login' => $login, 'password' => $hashedPassword]);
    $user = $query->fetch(PDO::FETCH_OBJ);

    // существует ли такая запись в бд
    if($user->id == 0){
        echo "Такого пользователя не существует";
    }else{
        // такой пользователь есть
        setcookie('log', $login, time() + 3600 * 24 * 30, "/");
        echo "Готово";
    }
?>


