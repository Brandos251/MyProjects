<?php
    // информация бд
    $user = 'a0827644_user_info';
    $passwordDB = '$up3rp@$$w0rd';
    $db = 'a0827644_user_info';
    $host = 'localhost';

    // подключение к бд
    $databaseDSN = 'mysql:host='.$host.';dbname='.$db; 
    $pdo = new PDO($databaseDSN, $user, $passwordDB);
?>

