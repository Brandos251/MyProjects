<!DOCTYPE html>
<html lang="ru">
<head>
   <?php 
   $website_title = 'Вход | Добро пожаловать';
   require 'blocks/head.php' ?>
</head>
<body>
<!-- ШАПКА -->
<?php require 'blocks/header.php';?>

<main class="container">
    <div class="row">
        <div class="col-md-8 mb-3">
            <!-- если куки пустые, то отображаем форму -->
            <?php
                if($_COOKIE['log'] == ''):
            ?>
            <h4>Форма авторизации</h4>
            <form action="" method="post">
                <label for="login">Ваш Логин</label>
                <input type="text" name="login" id="login_id" class="form-control">

                <label for="password">Ваш пароль</label>
                <input type="password" name="password" id="password_id" class="form-control">
                
                <!-- блок для вывода ошибки -->
                <div class="alert alert-danger mt-2" id="errorBlock"></div>
                <!-- блок для вывода успешной регистрации -->
                <div class="alert alert-success mt-2" id="successBlock"></div>
                

                <button type="button" id="auth_user" class="btn btn-success mt-2">Войти</button>
            </form>
            <!-- если куки установлены, то выводим следующее -->
            <?php
                else:;
            ?>
                <!-- отображение Логина пользователя -->
                <h2>Вы: <?=$_COOKIE['log']?></h2>
                <button class="btn btn-danger" id="exit_btn">Выйти</button>

                <!-- окно уведомления -->
                <div class="alert alert-danger mt-2" id="exitBlock"></div>
            <?php
                endif;
            ?>
        </div>
        <!-- вспомогательная информация для основной страницы -->
        <?php require 'blocks/aside.php' ?>
    </div>
</main>

<!-- ПОДВАЛ -->
<?php require 'blocks/footer.php' ?>

<!-- подключение framework Ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<!-- отправка данных по Ajax -->
<script>
    // кнопка входа
    $("#auth_user").click(function(){
        // получаем данные
        let login = $('#login_id').val();
        let password = $('#password_id').val();

        // отправка Ajax запроса
        $.ajax({
            url: 'form-backend/submit_auth.php',
            type: 'POST',
            cache: false, 
            data: {'login' : login, 
                   'password' : password
                },
            dataType: 'html',
            success: function(data){
                if(data.trim() === "Готово"){
                    $('#successBlock').text("Подождите. Выполняется вход").show()
                    document.location.reload(true)
                }else{
                    // вывод ошибки
                    $("#errorBlock").text(data).show()
                }
            }
        });

    });

    // кнопка выхода
    $("#exit_btn").click(function(){
        // отправка Ajax запроса
        $.ajax({
            url: 'form-backend/exit.php',
            type: 'POST',
            cache: false, 
            data: {},
            dataType: 'html',
            success: function(data){
                // если сервер дает ответ то
                $("#exitBlock").text("Подождите. Выполняется выход").show()
                document.location.reload(true)
            }
        });

    });
</script>
</body>
</html>

