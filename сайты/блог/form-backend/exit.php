<?php
    setcookie('log', "", time() - 3600 * 24 * 30, "/");
    // удаляем элемент из массива
    unset($_COOKIE['log']);
    echo true;
?>