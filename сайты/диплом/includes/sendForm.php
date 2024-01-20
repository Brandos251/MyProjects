<?php

    require_once 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $problem = $_POST['problem'];
    $phone = $_POST['phone'];

    if(!empty($name) && !empty($email) && !empty($problem) && !empty($phone)){
        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `email`, `problem`, `phone`) VALUES (NULL, '$name', '$email', '$problem', '$phone')");
        header('Location: ../answer.php');
    }
?>

