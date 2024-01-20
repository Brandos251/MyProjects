<?php
    // получаем данные из формы в переменные
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $mess = trim(filter_var($_POST['mess'], FILTER_SANITIZE_STRING));

    // проверяем длину, если она <= 3 символов, то выходм
    $error = "";
    if(strlen($username) <= 3){
        $error = "Введите имя";
    }else if(strlen($email) <= 3){
        $error = "Введите Email";
    }else if(strlen($mess) <= 3){
        $error = "Введите сообщение";
    }
   
    // если есть ошибка, то код не выполняется
    if(!empty($error)){
        echo $error;
        exit();
    }else{
        // если ошибок нет, то выводим в success блок
        echo "Готово";
    }

    // отправка сообщения на нашу почту
    $adminEmail = "pavel.zlakomanov@mail.ru";
    $subject = "=?utf-8?B?".base64_encode("Новое сообщение с сайта")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

    mail($adminEmail, $subject, $mess, $headers);
?>

